<!DOCTYPE html>
<html lang="en">
<head>
<title>Deletar</title>
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
						<h1><a href="index.html" id="logo"><img
                      src="images/Novo_Projeto1.png"
                      width="200px"
                      height="400px"
                  /></a></h1>
					</div>
				</header>
<!-- / header-->
<!-- content -->
				<section id="content">
					<div class="wrapper"><br><br>
						<h2>Deletar Administradores</h2>
						<div id="contact_form">
							
							<form name="form1" id="ff" method="post" action="delete.php">
							<label>
								 ID*:
								 <input type="text" placeholder="Digite o ID do administrador" name="id" id="id" required>
								 </label>
								 <label>
								 E-mail*:
								 <input type="email" placeholder="Digite o e-mail do administrador" name="email" id="email" required>
								 </label>
								 <input class="sendButton" type="submit" name="Submit" value="Deletar">
                                 
							</form>
							<br><br>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>

</body>
</html>