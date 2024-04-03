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
	<link rel="stylesheet" type="text/css" href="../css/event.css"/>
	<link rel="shortcut icon" type="image/x.icon" href="../imagens/senac.ico"/>
	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
	<div id="cabecalho">
		<img id="logosenac" src="../imagens/logosenac.png" alt="Senac Fecomércio Sesc" title="Senac Fecomércio Sesc">
		<span>
		<a  href="https://www.facebook.com/senacrsoficial" target="black">
			<img id="imgredes" src="../imagens/logoface.png" alt="Facebook" title="Facebook"> </a>
			<a  href="https://www.instagram.com/senacrs/" target="black">
				<img id="imgredes" src="../imagens/logoinst.png" alt="Instagram" title="Instagram"> </a>
				<a href="https://twitter.com/senacrs" target="black">
					<img id="imgredes" src="../imagens/logotwi.png" alt="Twitter" title="Twitter"> </a>
						
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
						  <a href="JovemAprendiz.html">Jovem Aprendiz</a>
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
			<img id="imgm" src="../imagens/imgeventos.png">
		</div>
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
		<p id="pjustificado">
		Pesquisas sobre profissões mais valorizadas, profissionais mais disputados e salários mais interessantes, em geral, 
		<br>
		já indicavam a área da Tecnologia da Informação (TI). O setor vem ganhando ainda mais visibilidade. Mas você tem 
		<br>
		dúvidas sobre a carreira de TI? Esta é a sua chance de conhecer mais a fundo tudo sobre essa área que cresce a 
		<br>
		cada dia. Até o dia 13 de agosto, o Senac Tech realizará a Tech Week – Semana da Tecnologia. Gratuito, o evento  
		<br>
		temático será repleto de conteúdo, oficinas, novidades na área e muito aprendizado.
		<br>
		<br>
		Serão cinco dias de workshops on-line que abordarão temas como futuro, redes sociais, programação, a diferença de 
		<br>
		desenvolvedor e programador, manutenção de laptop e muitos outros assuntos focados nas principais tendências e  
		<br>
		direcionados para o mercado de trabalho de TI.
		<br>
		<br>
		“O objetivo é qualificar os participantes que possuem interesse na área. São formações de rápida duração, focadas na 
		<br>
		prática e nas tendências tecnológicas do mercado de trabalho. Uma ótima oportunidade para quem quer ampliar ideias 
		<br>
		sobre o setor e ficar por dentro das transformações digitais”.
		<br>
		<br>
		Mais informações podem ser obtidas pelo site do Senac Tech www.senacrs.com.br/tech, pelo telefone (51) 3288-7750 
		<br>
		ou ainda WhatsApp da escola (51) 99201-5385.
		</p>
		
		<div id="fotos">
			<img src="../imagens/foto.jpeg"> 
			<img src="../imagens/foto2.jpeg"> 
			<img src="../imagens/foto2.jpeg"> 
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