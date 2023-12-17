<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        /*
        echo '<pre>';
            print_r($request->all());
        echo '</pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
        return view('site.contato',['titulo' => 'Contato']);
        

        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        $contato->save();

        */

        //print_r($contato->getAttributes());

        //$contato = new SiteContato();
        //$contato->fill($request->all());
       // $contato->save();

        //print_r($contato->getAttributes());


        $motivo_contatos = MotivoContato::all();

        return view('site.contato',['titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos]);

    }

    public function salvar(Request $request){

        //realizar a validação dos dados do formulário recebidos no request
        $request->validate(
            [
            'nome' => 'required|min:3|max:40|unique:site_contatos', //nomes com no minimo 3 caracteres
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
            

            ],
            [
                'nome.min' => 'O campo Nome precisa ter, no mínimo, 3 caracteres',
                'nome.max' => 'O campo Nome precisa ter, no máximo, 40 caracteres',
                'nome.unique' => 'O Nome informado, já está em uso',
                'telefone' => 'O campo telefone precisa ser preenchido',
                'email.email' => 'O email informado não é válido',
                'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',
                'required' => 'O campo :attribute deve ser preenchido'
            ]
    );

        SiteContato::create($request->all());

        return redirect()->route('site.index');

    }
}
