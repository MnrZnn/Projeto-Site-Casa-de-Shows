<?php
$localhost = "localhost";
$usuario = "root";
$senha = "";
$db = "lv_lounge";
$conexao= new mysqli($localhost, $usuario, $senha, $db);
if($conexao->connect_error) {
    die("Erro de conexão: ". $conexao->connect_error);
}
?>