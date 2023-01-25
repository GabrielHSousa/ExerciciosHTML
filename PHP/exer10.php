<?php       
        function evento(){
            $duração = $_POST['tTempo'];

             $total = $duração / 3600;
             $minutos = $duração /60;
             return "A duração do evento foi de :$total h , e em minutos " .$minutos;
    }
    echo evento()
    ?>
    <br><br><a href="../html/botoes.html"><button>Voltar</button></a>