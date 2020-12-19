<?php

namespace App\Jobs;

use App\Models\User;
use App\Notifications\InvoicePaid;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $usuario= new User([
            'name'=>'Fabian Lopez',
            'email'=>'fabi.lopez1992@gmail.com'
        ]);
       return $usuario->notify(new InvoicePaid($usuario));
        // Log::info('Enviar mensaje ');
    }
}
