<!DOCTYPE html>
<html lang="en">
<head>
<title>Contato</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
require_once 'Config/conexao.php';
if($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = MD5($_POST['senha']);
    $sql = "INSERT INTO cadastrar (nome, email, senha) VALUES('$nome', '$email', '$senha')";
    if($conexao->query($sql)) {
		echo "<p>Cadastrado com sucesso</p>";
    }else{
        echo "Erro ". $sql . ' ' . $conexao->connect_error;
    }
    $conexao->close();}
?>
<a href="menu_adm.php">Voltar à tela principal do administrador</a>
</body>
</html>