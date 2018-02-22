<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function upload(Request $request,$action){

        return "Carregando arquivo";
    }
}