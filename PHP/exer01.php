<?php

    function calcular(){    
        $distancia = $_POST['tDistancia'];
        $consumo   = $_POST['tConsumo'];

        return $distancia / $consumo;
    }

    echo calcular();    
?>
 <br><br><a href="../HTML/botoes.html"><button>Voltar</button></a>