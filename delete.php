<!DOCTYPE html>
<html lang="en">
<head>
<title>Exclusão</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
</body>
<?php
require_once 'Config/conexao.php';
if($_POST) {
	$id = $_POST['id'];
    $email = $_POST['email'];

    $sql = "DELETE FROM cadastrar WHERE email = '$email' and id_cadastrar='$id'";
    if($conexao->query($sql)) {
    }else{
        echo "Erro ". $sql . ' ' . $conexao->connect_error;
    }
    $conexao->close();}
?>

<h2>Deletado com Sucesso</h2>
<a href="menu_adm.php">Voltar à tela principal do administrador</a>
</body>
</html>