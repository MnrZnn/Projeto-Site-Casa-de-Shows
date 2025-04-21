<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ingressos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all" />
</head>
<body id="page2">
<div class="body1">
  <div class="body2">
    <div class="body3">
      <div class="main zerogrid">
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
        <section id="content">
          <div class="wrapper">
            <h2>Selecione seus ingressos</h2>
            <div class="container">
              <div class="row">
                <!-- Coluna da esquerda (detalhes e quantidade) -->
                <div class="col-md-6">
                  <?php
                    require_once 'conexao.php';
                    if (isset($_GET['id'])) {
                        $eventId = $_GET['id'];
                        $query = "SELECT nome_artista, foto_artista, data_evento, nome_turne FROM evento WHERE id = $eventId";
                        $result = mysqli_query($conexao, $query);
                        $event = mysqli_fetch_assoc($result);
                        echo '<h3>' . $event['nome_artista'] . ' - ' . $event['nome_turne'] . '</h3>';
                        echo '<p>Data: ' . $event['data_evento'] . '</p>';
                        echo '<img src="images/' . $event['foto_artista'] . '" alt="" style="width: 300px; height: auto;">';
                    } else {
                        echo '<p>Evento não encontrado.</p>';
                    }
                  ?>
                  <div style="margin-top: 20px;">
                    <label for="ticketQty">Quantidade de ingressos:</label>
                    <input type="number" id="ticketQty" name="ticketQty" min="1" max="10" class="form-control" style="width: 100px;">
                    <button class="btn btn-success" style="margin-top: 10px;">Comprar</button>
                    <img src="images/aceitamos.png" alt="Formas de Pagamento" style="width: 150px; margin-top: 10px;">
                  </div>
                </div>
                <!-- Coluna da direita (imagem dos assentos) -->
                <div class="col-md-6">
                  <h4>Escolha seu assento</h4>
                  <img src="images/plateia.jpg" alt="Assentos Livres" style="width: 100%; max-width: 800px;">
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now() </script>
</body>
</html>
