<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UploadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');//verifica se o usuario esta autenticado caso nao direciona para tela de autenticação
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.upload');
       
    }

    public function upload(Request $request){

       
        /*
        * O campo do form com o arquivo tinha o atributo name="file".
        */
        $file = $request->file('file');

    

        if (empty($file)) {
         
              abort(400, 'Nenhum arquivo foi enviado.');
        }

        dd($file) ;
        echo "Aquivo ok"; dd($file->getClientOriginalName());

        //$path = $file->store('uploads');

        // Faça qualquer coisa com o arquivo enviado...
    }
}