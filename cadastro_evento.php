<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Cadastrar Evento</title>
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
                            <h2>Cadastrar Novo Evento</h2>
                            <div id="contact_form">
                                <form name="form1" id="ff" method="post" action="inserir_evento.php">
                                    <label>Nome do Artista*:</label>
                                    <input type="text" placeholder="Digite o nome do artista" name="nome_artista" id="nome_artista" required class="form-control">
                                    <br>

                                    <label>Data*:</label>
                                    <input type="date" placeholder="Digite a data do show" name="data_evento" id="data_evento" required class="form-control">
                                    <br>

                                    <label>Nome da Turnê*:</label>
                                    <input type="text" placeholder="Digite o nome da turnê" name="nome_turne" id="nome_turne" required class="form-control">
                                    <br>

                                    <label>Link para Ingresso:</label>
                                    <input type="text" placeholder="Digite o link do ingresso" name="ingresso" id="ingresso" class="form-control">
                                    <br>

                                    <label>Foto:</label>
                                    <input type="file" id="foto_input" class="form-control">
                                    <!-- Campo oculto para armazenar o nome do arquivo -->
                                    <input type="hidden" name="foto_artista" id="foto_artista">

                                    <input class="sendButton btn btn-success" type="submit" name="Submit" value="Cadastrar">
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

    <script>
        // Captura o nome do arquivo e insere no campo oculto
        document.getElementById('foto_input').addEventListener('change', function() {
            var fileName = this.files[0].name;
            document.getElementById('foto_artista').value = fileName;
        });
    </script>
</body>
</html>
