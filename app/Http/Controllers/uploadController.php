<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
//use App\Services\Importacao\AbstractConta;
use App\Services\Importacao\AbstractConta;

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
           //RelatorioDebitoService::teste();
           //AbstractConta::teste();
           $arquivo=new  AbstractConta();
           $arquivo->processa($file);
          //AbstractConta::processa($file);   
      }
}