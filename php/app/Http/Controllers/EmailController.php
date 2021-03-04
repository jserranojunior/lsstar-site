<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function index(){
        return view('emails.mails');
    }

    public function send(Request $request){
        
        $nome = $request->nome;
        $dados = ['nome' => $request->nome,
        'telefone' => $request->telefone,
        'email' => $request->email,
        'mensagem' => $request->mensagem
    ];
       

        Mail::send('emails.bodymails', $dados, function($message){
            $message->to('lsstar@lsstar.com.br');
            $message->subject('E-mail enviado pelo site da Lsstar');
        });
        return view('contato');
    }
}
