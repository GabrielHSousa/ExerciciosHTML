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
    }//fim do converter
        function hex(){
            $decimal = $_POST['tSequencia'];
            $q = 1;
            $r = 0;
            $msg = "";
            while($q >= 1){
                $q = $decimal / 16;//O resultado da operação
                $r = $decimal % 16;//O resto da divisão
                $decimal = $q;
                if($r > 9){
                    $r = converter($r);
                }
                $msg .= $r;
            }
            return strrev($msg);
        }//fim
    
    echo hex();
    
?>
<br><br><a href="../html/botoes.html"><button>Voltar</button></a>
