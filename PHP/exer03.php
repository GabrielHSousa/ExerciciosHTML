<?php
function dec(){
        $n = $_POST['tSequencia'];
        $tamanho = strlen($binario);
        $contador = $tamanho - 1;
        for($n = 0; $n < $tamanho; $n++){
            if(substr($binario,$n,1) == 1){
                $decimal += pow(2,$contador);
            }
            $contador--;
        }//fim do for
        return $decimal;
    }
    echo dec();

