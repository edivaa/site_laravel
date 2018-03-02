<?php 
namespace App\Services\Importacao; //define onde esta o arquivo para ser referenciado por outras classes ou aquivos

 class AbstractConta{
 
    protected $tipo = 'debitos';

    public static function teste(){

         dd("Teste");    
    }
  

    
    public function processa($nomeFile){


   
        if (empty($nomeFile)) {
         
            abort(400, 'Nenhum arquivo foi enviado.');
        }

      //$header = fgetcsv();//lendo arquivo
      $dados = file($nomeFile->path());
          

                //Ler os dados do array
                foreach($dados as $linha){
              
                    $linha_limpa = preg_replace('/\s+/',' ',$linha );//Tirando especos excessivos
                    $array_linha = explode(' ', $linha_limpa);//colocando coluna separado por espaco em um campo de um vetor
                    
                     if($this->tipoCod($array_linha[0])=="20") $this->cabecalho($array_linha);
         
                     if($this->tipoCod($array_linha[0])=="30") $this->chamada($array_linha);
                
            	
            }
        

    }

    public function cabecalho($array_linha){

        echo $this->classificacao($this->tipoCod($array_linha[0])) ;  
        echo "Dados: Tipo: $array_linha[0],  Ano: $array_linha[1], Numero linha: $array_linha[2], Endereço: $array_linha[5] $array_linha[6] $array_linha[7] $array_linha[8] $array_linha[9] <br>";  

    }
 
    public function chamada($array_linha){

            echo $this->classificacao($this->tipoCod($array_linha[0])) ;   
            echo "Dados: Tipo:". $this->tipoCod($array_linha[0]).",  Ano:". $this->ano($array_linha[1]).", Numero linha: $array_linha[3], Cidade: ".$this-> estado($array_linha[4])." <br>";  

    }


    public function ano($string){//retorna ano

        return substr($string, 0, 4);//get ano
    }


    public function tipoCod($string){//retorna o codigo de tipo/classificacao
        
        return substr($string, 0, 2);//get tipo
    }

    public function estado($string){//retorna ano

        return substr($string, 13, 8);//get ano
    }


    public function classificacao($classif){// Retorna o nome do tipo/classificação 

         Switch($classif){

           case '20': return "Endereço do local -"; break;
           case '30': return "Chamadas -"; break;
           case '40': return "Servicos -"; break;
           case '50': return "Descontos -";break;
           case '60': return "Planos -";break;
           case '70': return "Ajustes -";break;
           case '80': return "Nota fiscal -"; break;
           case '90': return "Informativo -";break;
           Default: return "Sem classificação -";break;

         }

    }
}
