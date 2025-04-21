<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0;url=agenda.php">
<title>Inserir</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
<link rel="stylesheet" href="css/contactform.css">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Terminal_Dosis_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style='clear:both;text-align:center;position:relative'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page6">
<div class="body1">
	<div class="body2">
		<div class="body3">
			<div class="main zerogrid">
<!-- header -->
				<header>
				<div class="wrapper">
                <h1>
                  <a href="index.html" id="logo"><img src="images/Novo_Projeto1.png" width="200px" height="400px"/></a>
                </h1>
                <nav>
						<ul id="menu">
								<li id="active"><a href="index.html">Home</a></li>
								<li><a href="quem_somos.html">Quem Somos</a></li>
								<li><a href="agenda.html">Agenda</a></li>
								<li><a href="contact.php">Contato</a></li>
								<li><a href="login.php">Login</a></li>
							</ul>
						</nav>
					</div>
				</header>
<!-- / header-->
<?php
require_once 'Config/conexao.php';
if($_POST) {
    $nome_artista = $_POST['nome_artista'];
    $data_evento = $_POST['data_evento'];
    $nome_turne = $_POST['nome_turne'];
    $foto_artista = $_POST['foto_artista'];
    $ingresso = $_POST['ingresso'];
    $sql = "INSERT INTO evento (nome_artista, data_evento, nome_turne, foto_artista, ingresso) VALUES('$nome_artista', '$data_evento', '$nome_turne', '$foto_artista', '$ingresso')";
    if($conexao->query($sql)) {
    }else{
        echo "Erro ". $sql . ' ' . $conexao->connect_error;
    }
    $conexao->close();}
?>

<!-- footer -->
	<footer>
		<div class="wrapper">
		<div class="wrapper">
			<div align="center"><div class="wrap-col">
			 	Designed by Bianca de Almeida e Sousa, Luiza Helena Tardelli Marçulli Espíndola, José Armando Abrão Boer, Munir Terranova Abou Zenni<br>
			</div></div>
			
		</div>
		</div>
<!-- {%FOOTER_LINK} -->
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>