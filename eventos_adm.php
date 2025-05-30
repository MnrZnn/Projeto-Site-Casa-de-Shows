<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Listar Eventos</title>
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
                            <h2>Lista de Eventos</h2>
                            <table class="table table-dark table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome do Artista</th>
                                        <th scope="col">Data do Show</th>
                                        <th scope="col">Nome da Turnê</th>
                                        <th scope="col">Foto do Evento</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        require_once 'Config/conexao.php';
                                        $sql = mysqli_query($conexao, "SELECT * FROM evento") or die( mysqli_error($conexao));
                                        while($row = mysqli_fetch_assoc($sql)){
                                            echo "<tr>
                                                <td>".$row['id']."</td>
                                                <td>".$row['nome_artista']."</td>
                                                <td>".$row['data_evento']."</td>
                                                <td>".$row['nome_turne']."</td>
                                                <td><img src='images/".$row['foto_artista']."' alt='Foto do Evento' style='width:100px;'></td>
                                            </tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
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
