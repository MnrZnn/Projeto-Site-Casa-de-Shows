<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<header>
    </header>
    <br><br>
<?php
require_once 'Config/conexao.php';

if ($_POST) {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
    $id_cadastrar = $_POST['id_cadastrar'] ?? '';

    $sql = "UPDATE cadastrar SET nome='$nome', email='$email', senha='$senha' WHERE id_cadastrar='$id_cadastrar'";

    if ($conexao->query($sql)) {
        echo "<p>Atualizado com sucesso</p>";
    } else {
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();
} else {
    die('Nenhum dado enviado.');
}
?>

<a href="menu_adm.php">Voltar à tela principal do administrador</a>
