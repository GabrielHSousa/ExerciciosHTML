<?php
    function notas(){
        $nome = $_POST['tNome'];
        $notas1 = $_POST['tNotas1'];
        $notas2 = $_POST['tNotas2'];
        $notas3 = $_POST['tNotas3'];
        $media = ($notas1+$notas2+$notas3)/3;
     
        return "$nome sua nota final sera: ". $media;
    }
        echo notas();
        
?>