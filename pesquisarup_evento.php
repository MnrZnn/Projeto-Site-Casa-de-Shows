<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Atualizar Evento</title>
    <!-- Estilos já existentes no site -->
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body id="page2">
    <div class="body1">
        <div class="body2">
            <div class="body3">
                <div class="main zerogrid">
                    <!-- header -->
                    <header>
                        <div class="wrapper">
                            <h1>
                                <a href="index.html" id="logo"><img src="images/Novo_Projeto1.png" width="200px" height="400px" alt="Logo"/></a>
                            </h1>
                            <nav>
                                <ul id="menu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="quem_somos.html">Quem Somos</a></li>
                                    <li><a href="agenda.php">Agenda</a></li>
                                    <li><a href="contact.php">Contato</a></li>
                                </ul>
                            </nav>
                        </div>
                    </header>
                    <!-- /header -->
                    
                    <!-- content -->
                    <section id="content">
                        <div class="wrapper">
                            <h2>Atualizar Evento</h2>
                            <div class="d-grid gap-2 col-md-6 mx-auto">
                                <?php
                                    require_once 'Config/conexao.php';
                                    $id = $_POST['id'];
                                    $sql = "SELECT * FROM evento WHERE id='$id'";
                                    $result = $conexao->query($sql) or die(mysqli_error($conexao));

                                    if ($result->num_rows > 0) {
                                        $dados = $result->fetch_assoc();
                                        $nome_artista = $dados['nome_artista'];
                                        $foto_artista = $dados['foto_artista'];
                                        $data_evento = $dados['data_evento'];
                                        $nome_turne = $dados['nome_turne'];
                                        $ingresso = $dados['ingresso'];
                                        $id = $dados['id'];
                                    }
                                ?>
                                <form method="POST" action="update_evento.php">
                                    <table class="table">
                                        <tr>
                                            <th>Nome</th>
                                            <td><input type="text" name="nome_artista" placeholder="Nome do artista" value="<?php echo $nome_artista; ?>"/></td>
                                        </tr>
                                        <tr>
                                            <th>Data</th>
                                            <td><input type="date" name="data_evento" value="<?php echo $data_evento; ?>"/></td>
                                        </tr>
                                        <tr>
                                            <th>Nome da turnê</th>
                                            <td><input type="text" name="nome_turne" placeholder="Nome da turnê" value="<?php echo $nome_turne; ?>"/></td>
                                        </tr>
                                        <tr>
                                            <th>Foto do artista</th>
                                            <td><input type="file" name="foto_artista" id="input" value="<?php echo $foto_artista; ?>"/></td>
                                        </tr>
                                        <tr>
                                            <th>Ingresso</th>
                                            <td><input type="text" name="ingresso" value="<?php echo $ingresso; ?>"/></td>
                                        </tr>
                                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                        <tr>
                                            <td><button type="submit" class="bt btn-info">Salvar Alterações</button></td>
                                            <td><a href="menu_adm.php"><button type="button" class="btn btn-success">Página Inicial Adm</button></a></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- /content -->
                </div>
            </div>
        </div>
    </div>

    <div class="main zerogrid">
        <!-- footer -->
        <footer>
            <div class="wrapper">
                <div align="center">
                    <div class="wrap-col">
                        Designed by Bianca de Almeida e Sousa, Luiza Helena Tardelli Marçulli Espíndola, José Armando Abrão Boer, Munir Terranova Abou Zenni<br />
                    </div>
                </div>
            </div>
        </footer>
        <!-- /footer -->
    </div>

    <script type="text/javascript"> Cufon.now() </script>
</body>
</html>
