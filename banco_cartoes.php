<?php
require("conexao.php");

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$renda = $_POST["renda"];

try {
    $sql = "INSERT INTO cartoes(nome, cpf, email, telefone, endereco, renda) 
            VALUES(:n, :c, :e, :t, :en, :r)";
    $insercao = $conexao->prepare($sql);
    $insercao->bindParam(':n', $nome);
    $insercao->bindParam(':c', $cpf);
    $insercao->bindParam(':e', $email);
    $insercao->bindParam(':t', $telefone);
    $insercao->bindParam(':en', $endereco);
    $insercao->bindParam(':r', $renda);

    if ($insercao->execute()) {
        echo 'Successo! Os dados foram inseridos com sucesso.';
        header("refresh:3;url=aberturaconta.php");
        exit;
    } else {
        echo 'Erro! Erro ao inserir os dados.';
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
