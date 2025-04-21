<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<header>
    </header>
    <br><br>
<?php
require_once 'Config/conexao.php';

if ($_POST){
    
    $nome_artista = $_POST['nome_artista'];
    $foto_artista = $_POST['foto_artista'];
    $data_evento = $_POST['data_evento'];
    $nome_turne = $_POST['nome_turne'];
    $ingresso = $_POST['ingresso'];
    $id = $_POST['id'];

    $sql = "UPDATE evento SET nome_artista='$nome_artista', foto_artista='$foto_artista', data_evento='$data_evento', nome_turne='$nome_turne', ingresso='$ingresso' WHERE id = {$id}";

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
