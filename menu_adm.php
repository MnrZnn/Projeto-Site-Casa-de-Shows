<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Administrador</title>
    <!-- Estilos já existentes no site -->
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 colunas */
            gap: 20px; /* Espaçamento entre os quadrados */
            justify-content: center;
            padding: 20px;
        }

        .grid-item {
            background-color: #007bff; /* Azul */
            color: white;
            width: 150px;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
        }

        .grid-item:hover {
            background-color: #0056b3; /* Azul mais escuro ao passar o mouse */
        }

        /* Responsivo para dispositivos menores */
        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr); /* 2 colunas em telas menores */
            }
            .grid-item {
                width: 100px;
                height: 100px;
                font-size: 14px;
            }
        }
    </style>
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
                            <h2>Painel do Administrador</h2>
                            <div class="grid-container">
                                <a href="administradores.php" class="grid-item">Administradores</a>
                                <a href="eventos_adm.php" class="grid-item">Eventos</a>
                                <a href="contato_adm.php" class="grid-item">Formulário de Contato</a>
                                <a href="alterar_adm.php" class="grid-item">Atualizar Funcionario</a>
                                <a href="deletar.php" class="grid-item">Deletar Funcionario</a>
                                <a href="cadastro_evento.php" class="grid-item">Inserir Evento</a>
                                <a href="atualizar_evento.php" class="grid-item">Atualizar Evento</a>
                                <a href="deletar_evento.php" class="grid-item">Deletar Evento</a>
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
