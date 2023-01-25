<?php
function dec(){
        $decimal = 0;
        $binario = $_POST['tSequencia'];
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
    
?>
<br><br><a href="../html/botoes.html"><button>Voltar</button></a>
