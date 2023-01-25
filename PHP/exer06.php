<?php
    function vend(){
        $nome = $_POST['tNome'];
        $salario = $_POST['tSalario'];
        $vendas = $_POST['tVendas']; 
        $resultado = $vendas * 0.15 + $salario;
   
    return "$nome seu salario fixo é $salario, total de vendas: $vendas e o salario do mês: $resultado.";

    }
    echo vend();
?>
<br><br><a href="../html/botoes.html"><button>Voltar</button></a>