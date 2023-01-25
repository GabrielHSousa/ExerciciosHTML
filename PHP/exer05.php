<?php
 function converter($valor){
    switch($valor){
        case 10:
            return "A";
            break;
        case 11:
            return "B";
            break;
        case 12:
            return "C";
            break;
        case 13:
            return "D";
            break;
        case 14:
            return "E";
            break;
        case 15:
            return "F";
            break;
        default:
            return "Erro";
            break;
    }
}
function bin(){
    $binario = $_POST['tSequencia'];
    $tamanho = strlen($binario);
    $contador = $tamanho - 1;
    for($n = 0; $n < $tamanho; $n++){
        if(substr($binario,$n,1) == 1){
            $hexadecimal += pow(2,$contador);
        }
        $contador--;
    }//fim do for
    return $hexadecimal;
    while($hexadecimal >= 1){
        $hexadecimal = $binario / 16;//O resultado da operação
        $binario = $hexadecimal % 16;//O resto da divisão
        $binario = $hexadecimal;
        if($r > 9){
            $r = converter($r);
        }
        $msg .= $r;
    }
    return strrev($msg);
}
echo bin();

?>
<br><br><a href="../html/botoes.html"><button>Voltar</button></a>
