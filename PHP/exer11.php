<?php
    function notas(){
            $notas1 = $_POST['tNotas1'];
            $notas2 = $_POST['tNotas2'];
            $notas3 = $_POST['tNotas3'];
        
            $ari = ($notas1 + $notas2 + $notas3)/3;
            $pon = ( $notas1 * 3 ) + ($notas2 * 3) + ($notas3 * 4) /10;
            $harm = 3/(1/$notas1 + 1/$notas2 +1/$notas3);
        
            return $ari;
            return $pon;
            return $harm;
            }
        echo notas();
        
?>
<br><br><a href="../html/botoes.html"><button>Voltar</button></a>