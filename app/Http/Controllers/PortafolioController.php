<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolio=[
            ['title'=>'Preoyecto 1'],
            ['title'=>'Preoyecto 2'],
            ['title'=>'Preoyecto 3'],
            ['title'=>'Preoyecto 4'],
        ];
        $data=array('portafolios'=>$portafolio);
        return view('portafolio',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $usuario= new User([
            'name'=>'Fabian Lopez',
            'email'=>'fabi.lopes1992@gmail.com'
        ]);
        return $usuario;
       request()->validate([
            'nombre'=>'required'
       ],[
           'nombre.required'=>'Nesecitamos tu nombre completo'
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
