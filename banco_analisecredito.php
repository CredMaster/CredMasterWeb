<?php

require("conexao.php");

// Pegar todos os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$telefone1 = $_POST["telefone1"];
$foto = $_FILES["foto"];
$foto1 = $_FILES["foto1"];
$foto2 = $_FILES["foto2"];
$foto3 = $_FILES["foto3"];
$foto4 = $_FILES["foto4"];

$novo_nome = '';
$novo_nome1 = '';
$novo_nome2 = '';
$novo_nome3 = '';
$novo_nome4 = '';

$diretorio = "fotos/"; // Pasta onde os arquivos serão salvos

// Função para salvar arquivos e retornar o nome gerado
function salvarArquivo($arquivo, $diretorio)
{
    if (isset($arquivo) && $arquivo['error'] === UPLOAD_ERR_OK) {
        $extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));
        $novo_nome = uniqid() . "." . $extensao;
        if (move_uploaded_file($arquivo['tmp_name'], $diretorio . $novo_nome)) {
            return $novo_nome;
        }
    }
    return ''; // Retorna string vazia se não salvar
}

// Salvar os arquivos e gerar os nomes
$novo_nome = salvarArquivo($foto, $diretorio);
$novo_nome1 = salvarArquivo($foto1, $diretorio);
$novo_nome2 = salvarArquivo($foto2, $diretorio);
$novo_nome3 = salvarArquivo($foto3, $diretorio);
$novo_nome4 = salvarArquivo($foto4, $diretorio);

// Inserção no banco de dados
$sql = "INSERT INTO credito(nome, email, telefone, telefone1, foto, foto1, foto2, foto3, foto4) 
        VALUES(:n, :e, :t, :t1, :f, :f1, :f2, :f3, :f4)";

try {
    $insercao = $conexao->prepare($sql);
    $insercao->bindParam(':n', $nome);
    $insercao->bindParam(':e', $email);
    $insercao->bindParam(':t', $telefone);
    $insercao->bindParam(':t1', $telefone1);
    $insercao->bindParam(':f', $novo_nome);
    $insercao->bindParam(':f1', $novo_nome1);
    $insercao->bindParam(':f2', $novo_nome2);
    $insercao->bindParam(':f3', $novo_nome3);
    $insercao->bindParam(':f4', $novo_nome4);

    if ($insercao->execute()) {
        // Se a execução for bem-sucedida
        echo 'Successo! Os dados foram inseridos com sucesso.';
        // Aguarda 3 segundos para exibir a mensagem e depois redireciona
        header("refresh:3;url=analisecredito.php"); // Redireciona após 3 segundos
        exit;
    } else {
        // Se houver erro na inserção
        echo 'Erro! Erro ao inserir os dados.';
    }
} catch (PDOException $e) {
    // Se houver exceção no banco de dados
    echo "Erro: " . $e->getMessage();
}
?>
