<?php
    //criar variáveis
    $servidor = "mysql:host=localhost;dbname=credmaster";
    $user = "root"; 
    $senha = "";

    try{
        //conexão com o banco
        $conexao = new PDO($servidor,$user,$senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, 
        PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "ERROR".$e->getMessage();
    }
?>