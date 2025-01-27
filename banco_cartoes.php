<?php
require("conexao.php");

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$renda = $_POST["renda"];

echo $nome . '<br>';
echo $cpf . '<br>';
echo $email . '<br>';
echo $telefone . '<br>';
echo $endereco . '<br>';
echo $renda . '<br>';

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
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados.";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
