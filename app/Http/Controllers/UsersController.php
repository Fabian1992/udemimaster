<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Models\User;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\This;

class UsersController extends Controller
{
    public function index()
    {
        $key="user.page.".request('page',1);        
        $users=Cache::rememberForever($key, function () {            
            return User::paginate(10);
        });
        // dispatch(new SendEmail);
        return view('users.users',compact('users'));
    }

    public function indexuser()
    {
        $users=User::paginate(10);       
        $this->setEmail();
        return view('users.users',compact('users'));
    }

    public function create()
    {
        return view('users.new',compact('users'));
    }

    public function setEmail()
    {
        $user= new User([
            'name'=>'Fabian Lopez',
            'email'=>'fabi.lopez1992@gmail.com'
        ]);
       $user->notify(new InvoicePaid($user));
            
    }
}
