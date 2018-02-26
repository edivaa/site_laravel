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

       // dd($file->path()) ;
        //$fh= fopen($file->path(),"r");//Abrindo arquivo
       // $header = fgetcsv();//lendo arquivo
        $dados = file($file->path());

        //dd($dados); 

       //Ler os dados do array
    foreach($dados as $linha){
            //Retirar os espaços em branco no inicio e no final da string
            //$linha = trim($linha);
            //Colocar em um array cada item separado pela virgula na string

            $linha_limpa = preg_replace('/\s+/',' ',$linha );//Tirando especos excessivos
            $array_linha = explode(' ', $linha_limpa);//colocando coluna separado por espaco em um campo de um vetor
            
            //dump($array_linha);
            
            //Recuperar o valor do array indicando qual posição do array requerido e atribuindo para um variável
            $tipo_item=$array_linha[0];
            $ano_item = $array_linha[1];
            $cod_item= $array_linha[2];
            $numero_linha= $array_linha[3];
            $estado_linha = $array_linha[4];
            
            
            echo "Dados: Tipo: $tipo_item,  Ano: $ano_item, Numero linha: $numero_linha, Estado: $estado_linha <br>";  
            
            //Criar a QUERY com PHP para inserir os dados no banco de dados
            //$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES ('$nome', '$email', '$usuario', '$senha')";
            
            //Executar a QUERY para inserir os registros no banco de dados com MySQLi
            //$resultado_usuario = mysqli_query($conn, $result_usuario);	
     }
   


        
       /* while ($line = fgetcsv($fh)){

              
            //$arrayLinha=  explode(" ",$line);
            //$cod=substr($arrayLinha[0], 0, 2);//getAção 
            //if($cod="20")
            // dump($line);

        }*/
      
        //$path = $file->store('uploads');

        // Faça qualquer coisa com o arquivo enviado...
    }
}