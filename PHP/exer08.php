<?php
    function temp(){
        $temperatura =  $_POST['tTemperatura'];

        $fahrenheit = (9 * $temperatura + 160) /5;

        return "A Temperatura Celsius: ". $fahrenheit;

}
    echo temp();
?>
<br><br><a href="../html/botoes.html"><button>Voltar</button></a>