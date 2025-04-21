<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Atualizar Administradores</title>
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
                            <h1>Atualizar Administradores</h1>
                            <br><br>
                            <?php
                                require_once 'Config/conexao.php';
                                $id_cadastrar = $_POST['id_cadastrar'];
                                $sql = "SELECT * FROM cadastrar WHERE id_cadastrar='$id_cadastrar'" or die(mysqli_error($conexao));
                                $result = $conexao->query($sql);
                                if($result->num_rows > 0){
                                    $dados = $result->fetch_assoc();
                                    $nome = $dados['nome'];
                                    $email = $dados['email'];
                                    $senha = $dados['senha'];
                                    $id_cadastrar = $dados['id_cadastrar'];
                                }
                            ?>
                            <form method="POST" action="update_adm.php">
                                <table class="table">
                                    <tr>
                                        <th>Nome</th>
                                        <td><input type="text" name="nome" placeholder="nome" value="<?php echo $nome; ?>" class="form-control"/></td>
                                        <th>E-mail</th>
                                        <td><input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>" class="form-control"/></td>
                                        <th>Senha</th>
                                        <td><input type="password" name="senha" placeholder="senha" value="<?php echo $senha; ?>" class="form-control"/></td>
                                        <input type="hidden" name="id_cadastrar" value="<?php echo $dados['id_cadastrar']; ?>"/>
                                    </tr>
                                </table>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-info">Salvar Alterações</button>
                                    <a href="menu_adm.php" class="btn btn-success">Página Inicial Adm</a>
                                </div>
                            </form>
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
