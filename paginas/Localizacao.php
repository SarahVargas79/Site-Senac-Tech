<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title>Senac-RS</title>
		<meta charset="UTF-8">
		<meta name="description" content="Está página é uma atividade, site Senac Tech">
		<!-- Descreve o conteúdo que vai ter na página -->
		<meta name="keywords" content="HTML, Site Senac Tech"> <!-- Palavras chaves -->
		<meta name="author" content="Sarah Rafaela V. de A. Moreira">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Sempre vai inicializar 1.0 a página, para abrir a página nas telas de outros dispositivos de acordo com o tamanho-->
		
		<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="../css/menu.css"/>
		<link rel="stylesheet" type="text/css" href="../css/paginalocal.css"/>
		<link rel="shortcut icon" type="image/x.icon" href="../imagens/senac.ico"/>
		
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	</head>

	<body>
		<div id="cabecalho">
			<img id="logosenac" src="../imagens/logosenac.png" alt="Senac Fecomércio Sesc" title="Senac Fecomércio Sesc">
		</div>
	
		<section>
			<nav id="menu">
				<div class="topnav" id="myTopnav">
						<a href="../index.php" class="active">Home</a>
					<div class="dropdown">
					<button class="dropbtn">Cursos</button>
						<div class="dropdownsub">
						  <a href="Livre.php">Livre</a>
						  <a href="Tecnico.php">Técnico</a>
						  <a href="ProgramaRSTI.php">Programa RS TI</a>
						  <a href="JovemAprendiz.php">Jovem Aprendiz</a>
						</div>
					</div>
						<a href="Eventos.php">Eventos</a>
						<a href="Cadastro.php">Cadastro</a>
						<a href="Login.php">Login</a>
						<a href="FaleConosco.php">Fale Conosco</a>
						<a href="Localizacao.php">Localização</a>
						
					  <!--
					  <a href="javascript:void(0)" onclick="myFunction();">
					  Executar JavaScript</a>
					  método de criar links que executam uma função em JavaScript
					  -->
					  <a href="javascript:void(0);" style="font-size:15px;" class="icon" 
					  onclick="myFunction()">&#9776;</a>
				</div>
			</nav>
		</section>	
		<?php
		if(isset($_SESSION['email_cad_sessao'])){
			echo '<p class="mensagem">Olá '.$_SESSION['email_cad_sessao'].', seja bem-vindo</p>';
			echo "<a class='login' href='../paginas/Cadastro.php?logout'>Logout</a>";
		}else{
			echo "<a class='login' href='../paginas/Login.php'><br>Faça seu login</a>";
		}
		if(isset($_GET['logout'])){
			session_destroy();
			header("Location: ../index.php");
		}
		?>
		<div id="l1">
			<div id="l2">
				<img src="../imagens/logoendereco.png">
				Av. Venâncio Aires, 93 - Cidade Baixa, Porto Alegre - RS, 90040-191
			</div>
			<div id="l3">
				<img src="../imagens/logotelefone.jpg">
				51 32864008
			</div>
			<div id="l4">
				<img src="../imagens/logowhats2.png">
				51 3288-7750 - Informações de cursos
			</div>
		</div>
		
		<div id="l5">
			<iframe src="https://www.google.com/maps/embed?pb=!4v1688230093156!6m8!1m7!1sfdxsUPKn64cEGXsjvUVfRg!2m2!1d-30.04268275752176!2d-51.21890730080302!3f172.72902!4f0!5f0.7820865974627469" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.7916150505043!2d-51.2210815848851!3d-30.042835681882874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978567f17f28d%3A0x2c2c5272bacf4d3a!2sSenac%20Tech!5e0!3m2!1spt-BR!2sbr!4v1688048841061!5m2!1spt-BR!2sbr" 
			allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>

		<footer>
			<img src="../imagens/logosenac2.png">
		</footer>
		<script>
		/*Alterne entre adicionar e remover a classe "responsivo" 
		para o topnav quando o usuário clicar no ícone
		1-cria a função para aplicar a responsividade no menu
			*/
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
			x.className += " responsive";//Abre e executa o icone do menu
		  } else {
			x.className = "topnav";//recolhe o menu pelo icone
		  }
		}
		</script>
	</body> 
</html>