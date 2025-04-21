<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Agenda</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/tablestyle" type="text/css"/>
    <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all" />
    <script type="text/javascript" src="js/jquery-1.5.2.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/Terminal_Dosis_300.font.js"></script>
    <script type="text/javascript" src="js/atooltip.jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/css3-mediaqueries.js"></script>
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5.js"></script>
      <style type="text/css"> .bg { behavior: url(js/PIE.htc); } </style>
    <![endif]-->
  </head>
  <body id="page2">
    <div class="body1">
      <div class="body2">
        <div class="body3">
          <div class="main zerogrid">
            <!-- header -->
            <header>
              <div class="wrapper">
                <h1><a href="index.html" id="logo"><img src="images/Novo_Projeto1.png" width="200px" height="400px"/></a></h1>
                <nav>
                  <ul id="menu">
                    <li id="active"><a href="index.html">Home</a></li>
                    <li><a href="quem_somos.html">Quem Somos</a></li>
                    <li><a href="agenda.php">Agenda</a></li>
                    <li><a href="contact.php">Contato</a></li>
                  </ul>
                </nav>
              </div>
            </header>
            <!-- / header-->
            <!-- content -->
            <section id="content">
              <div class="wrapper">
                <h2>Agenda de Shows</h2>
                <!-- Tabela -->
                <div class="container">
                  <?php
                    require_once 'conexao.php';
                    $query = "SELECT id, nome_artista, foto_artista, data_evento, nome_turne FROM evento";
                    $result = mysqli_query($conexao, $query);
                    if (!$result) {
                        die("Database query failed.");
                    }
                    echo '<table id="agenda-table" class="table">';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td><img class="img" src="images/' . $row['foto_artista'] . '" alt="" style="width: 300px; height: auto;"></td>';
                        echo '<td style="padding: 30px;">' . $row['nome_artista'] . '</td>';
                        echo '<td style="padding: 30px;">' . $row['data_evento'] . '</td>';
                        echo '<td style="padding: 30px;">' . $row['nome_turne'] . '</td>';
                        // Link redirecionando para a página de ingressos
                        echo '<td style="padding: 30px;"><a href="ingresso.php?id=' . $row['id'] . '" class="btn btn-secondary">Ingresso</a></td>'; 
                        echo '</tr>';
                    }
                    echo '</table>';
                    mysqli_free_result($result);
                    mysqli_close($conexao);
                  ?>
                </div>
              </div>
            </section>
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
        <!-- {%FOOTER_LINK} -->
      </footer>
    </div>
    <script type="text/javascript"> Cufon.now() </script>
  </body>
</html>
