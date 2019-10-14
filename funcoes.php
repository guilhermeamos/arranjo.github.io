<?php


class funcoes
{
    public $n,$p,$soma;
    public function index(){
        
        $n = filter_input(INPUT_GET,"n",FILTER_DEFAULT);
        $p = filter_input(INPUT_GET,"p",FILTER_DEFAULT);
        echo $n.":".$p;
    }

    function fatorial($n) {
        $result = 1;
        for($i=$n;$i>1;$i--){
            $result *= $n;
            $n--;
        }
        return $result;
    }
    function visual($n, string $tesxt){ 
        $aux = $n;
        $result = 1;
        for($i=$n;$i>1;$i--){
            if($i == $aux){
                $result = $n;   
            }else{                
                $result = $result ." * ".$n;            
                if( $i == 2){
                    $result = $result ." * 1";
                }

            }
            $n--;
        }
        
        echo $tesxt." = ".$result."  = ".$this->fatorial($aux)."<br><hr>";
    }

    
}