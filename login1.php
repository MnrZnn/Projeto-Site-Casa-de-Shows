<?php
        require_once 'Config/conexao.php';
session_start();
 
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: menu_adm.php');
	exit();
}
 
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "select * from cadastrar where email = '{$email}' and senha = md5('{$senha}')";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.html');
	exit();
}
    ?>
