<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\msgReceived;


class mensajesCtrl extends Controller
{
    public function store(){
       $mensaje = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|size:10',
            'subjet' => 'required',
            'msg' => 'required'
        ]);

        //Enviar email
        Mail::to('herber.medina@gmail.com')->send(new msgReceived($mensaje));
        return 'Mensaje enviado';


    }
}
