<?php
	session_start();
?>
<!DOCTYPE html> 
<html lang="pt-br">
	<head>
		<title>Senac-RS</title>
		<meta charset="UTF-8">
		<meta name="description" content="Está página é uma atividade, site Senac Tech"> <!-- Descreve o conteúdo que vai ter na página -->
		<meta name="keywords" content="HTML, Site Senac Tech"> <!-- Palavras chaves -->
		<meta name="author" content="Sarah Rafaela V. de A. Moreira">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Sempre vai inicializar 1.0 a página, para abrir a página nas telas de outros dispositivos de acordo com o tamanho-->	
	
		<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="../css/menu.css"/>
		<link rel="stylesheet" type="text/css" href="../css/paginacursos.css"/>
		<link rel="shortcut icon" type="image/x.icon" href="../imagens/senac.ico"/>
	</head>
	<body>
		<div id="cabecalho">
			<img id="logosenac" src="../imagens/logosenac.png" alt="Senac Fecomércio Sesc" title="Senac Fecomércio Sesc">
			<span>
			<a href="https://api.whatsapp.com/send/?phone=55051992015385&text=Ol%C3%A1%21+Acessei+o+site+e+gostaria+de+mais+informa%C3%A7%C3%B5es...&type=phone_number&app_absent=0" target="black">
				<img id="imgwhats" src="../imagens/logowhats.png" alt="Whatsapp" title="Informações do curso"> </a>
				<a  href="https://www.facebook.com/senacrsoficial" target="black">
					<img id="imgredes" src="../imagens/logoface.png" alt="Facebook" title="Facebook"> </a>
					<a  href="https://www.instagram.com/senacrs/" target="black">
						<img id="imgredes" src="../imagens/logoinst.png" alt="Instagram" title="Instagram"> </a>
			</span>	
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
		<div id="m1">	
			<img src="../imagens/imgcursocoreldraw.png">
		</div>
		<?php
		if(isset($_SESSION['email_cad_sessao'])){
			echo '<p class="mensagem">Olá '.$_SESSION['email_cad_sessao'].', seja bem-vindo</p>';
			echo "<a class='login' href='../paginas/Cadastro.php?logout'>Logout</a>";
		}else{
			echo "<a class='login' href='../paginas/Login.php'>Faça seu login</a>";
		}
		if(isset($_GET['logout'])){
			session_destroy();
			header("Location: ../index.php");
		}
		?>
			<h2 class="c1">Corel Draw</h2>
		<div class="paragrlogos2">
			<p class="pjustificado">
			Com o crescimento das mídias sociais, aumentou a demanda por criações de peças gráficas e que atenda
			<br>
			às necessidades das empresas, sejam elas de pequeno ou grande porte. Neste cenário, o mercado requer
			<br>
			profissionais altamente capacitados para essa área. Você se identifica com essa demanda? Então, o curso
			<br>
			Corel DRAW é uma excelente oportunidade de qualificação.
			<br>
			<br>
			Durante o curso, de 48 horas de duração, você aprenderá a desenvolver habilidades e técnicas, criando
			<br>
			peças gráficas utilizando o software, além de preparar os arquivos para impressão. Torne-se um profis-
			<br>
			-sional da área do design qualificado e esteja preparado para os desafios do mundo profissional!
			</p>
		
			<img id="imgdraw" src="../imagens/imgdraw.jpg">
		</div>
		<footer>
			<span>
				<img src="../imagens/logosenac2.png">
				<p>© Todos os Direitos Reservados - 2023.</p>
			</span>
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