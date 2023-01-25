<?php
function alun(){
        $nome = $_POST['tNome'];
        $idade = $_POST['tIdade'];
        $dias =$_POST['tDias'];
        $anos = $_POST['tAnos'];
        $mes =$_POST['tMeses'];

    $media = ( $idade * $anos )+ $mes * $dias;

    return "$nome tem idade de $idade em dias são $dias dias do ano de $anos e tera em meses: ".$media;
    }
    echo alun()
    ?>
    <br><br><a href="../html/botoes.html"><button>Voltar</button></a>