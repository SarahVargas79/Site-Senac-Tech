<?php
	session_start();
?>
<!DOCTYPE html> 
<html lang="pt-br">
	<head>
		<title>Programa RSTI</title>
		<meta charset="UTF-8">
		<meta name="description" content="Está página é uma atividade, site Senac Tech"> <!-- Descreve o conteúdo que vai ter na página -->
		<meta name="keywords" content="HTML, Site Senac Tech"> <!-- Palavras chaves -->
		<meta name="author" content="Sarah Rafaela V. de A. Moreira">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Sempre vai inicializar 1.0 a página, para abrir a página nas telas de outros dispositivos de acordo com o tamanho-->	
	
		<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="../css/progrsti.css"/>
		<link rel="shortcut icon" type="image/x.icon" href="../imagens/senac.ico"/>
	</head>
	<body>
		<div id="cabecalho">
			<img id="logorsti" src="../imagens/logorsti.png" alt="Programa RS TI" title="Programa RS TI">
			<span>
			<a href="https://www.youtube.com/senacrsoficial" target="black">
				<img id="logotube" src="../imagens/logotube.png" alt="YouTube" title="YouTube"> </a>
					<a  href="https://www.instagram.com/senacrs/" target="black">
						<img id="imgredes" src="../imagens/logoinst2.png" alt="Instagram" title="Instagram"> </a>
							<a  href="https://www.facebook.com/senacrsoficial" target="black">
								<img id="imgredes" src="../imagens/logoface2.png" alt="Facebook" title="Facebook"> </a>
			</span>	
		</div>

		<section id="m">
			<nav id="menu">
				<div class="topnav" id="myTopnav">
						<a href="../index.php" class="active">Home</a>
					<div class="dropdown">
					<button class="dropbtn">Cursos</button>
						<div class="dropdownsub">
						  <a href="Livre.php">Livre</a>
						  <a href="Tecnico.php">Técnico</a>
						  <a href="JovemAprendiz.php">Jovem Aprendiz</a>
						  <a href="ProgramaRSTI.php">Programa RS TI</a>
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
			<img class="banner" src="../imagens/bannerrsti.png">
		<?php
		if(isset($_SESSION['email_cad_sessao'])){
			echo '<p class="mensagem">Olá '.$_SESSION['email_cad_sessao'].', seja bem-vindo</p>';
			echo "<a class='login' href='../paginas/Cadastro.php?logout'>Logout</a>";
		}else{
			echo "<a class='login' href='../paginas/Login.php'><br><br>Faça seu login</a>";
		}
		if(isset($_GET['logout'])){
			session_destroy();
			header("Location: ../index.php");
		}
		?>
		<div id="videorsti">
			<iframe src="https://www.youtube.com/embed/d08Tno8w5wI" title="YouTube video player"
				frameborder="0" allow="accelerometer; autoplay; 
					clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>

			<h1 id="progcenter">OBJETIVO</h1>
			
			<p id="pjustificado">
			Capacitar pessoas para atuarem no mercado de Tecnologia da Informação do Rio Grande do Sul, a fim de
			<br>
			desenvolver habilidades técnicas necessárias para atuação como Desenvolvedores de Software.
			</p>

			<h1 id="progcenter">
			NOSSA ATUAÇÃO
			</h1>
			
			<p id="pjustificado">
			O Senac-RS atua há 75 anos na capacitação de profissionais para atuação no mercado de trabalho. Acompanhou
			<br>
			a evolução das tecnologias ao longo do tempo, ofertando cursos atualizados e adequados às demandas das
			<br>
			empresas do setor de comércio de bens, serviços e turismo. Ao longo dos últimos 5 anos, mais de 26 mil
			<br>
			alunos foram capacitadas pelo Senac-RS, na área de Tecnologia da Informação, proporcionando a qualificação
			<br>
			do setor.
			</p>

			<h1 id="progcenter">IMPACTO PROGRAMA RS TI EM 2022 E 2023</h1>

			<img id="imgmetas" src="../imagens/metas.png" alt="Impacto Programa RS TI em 2022 e 2023" title="Impacto Programa RS TI em 2022 e 2023">

		<section id="tf">
				<h1 id="progcenter2">TRILHAS DE FORMAÇÃO</h1>
				
				<p id="pjustificado2">
				Ao total são 4 trilhas de formações presenciais, todas alinhadas com as oportunidades iniciais na área de
				<br>
				Tecnologia da Informação.
				</p>
				
			
				<h3 id="progcenter3">CLIQUE NA TRILHA DE SUA PREFERÊNCIA</h3>
			<div id="trilhas">		
					<a href="#trilha01"><img src="../imagens/trilha01.png" alt="Trilha01 - Desenvolvimento Front End" title="Trilha01"></a>
					<a href="#trilha02"><img src="../imagens/trilha02.png" alt="Trilha02 - Desenvolvimento Back End com Java" ></a>
					<a href="#trilha03"><img src="../imagens/trilha03.png" alt="Trilha03 - Desenvolvimento Desktop Java" title="Trilha03"></a>
					<a href="#trilha04"><img src="../imagens/trilha04.png" alt="Trilha04 - Desenvolvimento Back End com Java" title="Trilha04"></a>
				</div>
			</div>
		</section>
		
		<div id="trilha01">
			<h2 id="trilha">
			Trilha 01
			<br>
			Desenvolvimento Front End - 210h
			</h2>
			
			<p id="phoras">
			&#10148; Lógica de Programação - 60h
			<br>
			&#10148; Desenvolvimento Web Front-end - 114h
			<br>
			&#10148; Javascript - 36h
			</p>
			
			<p id="presumo">
			O profissional formado nesta trilha está apto a concorrer em seleções de perfis iniciais de atuação na área 
			<br>
			de TI. O participante tem conhecimentos amplo em HTML 5, CSS 3 e na linguagem de programação 
			<br>
			JavaScript, sendo capaz de analisar, planejar, desenvolver e testar páginas web responsivas, levando em
			<br>
			consideração os conceitos e boas práticas relacionados ao design de Interface do Usuário (UI) e Experiên-
			<br>
			-cia do Usuário (UX). Este profissional pode atuar como Web Designer, Desenvolvedor Front-end, UI/UX  
			<br>
			Designer, Testador de Software, em nível inicial.
			<br>
			</p>
		</div>
		
		<div id="trilha02">
			<h2 id="trilha">
			Trilha 02
			<br>
			Desenvolvimento Back End com Java - 204h
			</h2>
			
			<p id="phoras">
			&#10148; Lógica de Programação - 60h
			<br>
			&#10148; HTML e CSS Criação de Websites - 36h
			<br>
			&#10148; Programação Java Back End - 108h
			</p>
			
			<p id="presumo">
			O profissional formado nesta trilha está apto a concorrer em seleções de perfis iniciais de atuação na área 
			<br>
			de TI. O participante tem conhecimento em Banco de dados, SQL, HTML 5, CSS 3 e na linguagem de 
			<br>
			programação Java, sendo capaz de analisar, planejar, desenvolver e testar aplicações e serviços web em
			<br>
			Java e também integra-los ao Banco de Dados. Este profissional pode atuar como Desenvolvedor Back-end, 
			<br>
			Testador de Software, Programador Java, em nível inicial.
			</p>
		</div>	

		<div id="trilha03">
			<h2 id="trilha">
			Trilha 03
			<br>
			Desenvolvimento Desktop Java - 168h
			</h2>
			
			<p id="phoras">
			&#10148; Lógica de Programação - 60h
			<br>
			&#10148; Programação Java Desktop - 108h
			</p>
			
			<p id="presumo">
			O profissional formado nesta trilha está apto a concorrer em seleções de perfis iniciais de atuação na área
			<br>
			de TI. O participante tem conhecimento em Banco de dados, SQL e na linguagem de programação Java,
			<br>
			sendo capaz de analisar, planejar, desenvolver e testar aplicações desktop em Java e também integra-lo ao 
			<br>
			Banco de Dados. Este profissional pode atuar como Desenvolvedor de Software, Testador de Software, 
			<br>
			Programador Java, em nível inicial.
			</p>
		</div>
		
		<div id="trilha04">
			<h2 id="trilha">
			Trilha 04
			<br>
			Desenvolvimento Python - 252h
			</h2>
			
			<p id="phoras">
			&#10148; Lógica de Programação - 60h
			<br>
			&#10148; Formação Python - 156h
			<br>
			&#10148; Desenvolvimento de Websites com Django - 36h
			</p>
			
			<p id="presumo">
			O profissional formado nesta trilha está apto a concorrer em seleções de perfis iniciais de atuação na 
			<br>			
			área de TI. O participante tem conhecimentos em Banco de dados, SQL, HTML 5, CSS 3, na linguagem
			<br>
			de programação Python e no framework Django, sendo capaz de analisar, planejar, desenvolver e 
			<br>
			testar aplicações desktop com interface gráfica e aplicações e web desenvolvidas em Python e também
			<br>
			aplicações web desenvolvidas usando o framework Django. Este profissional pode atuar como Desenvol-
			<br>
			-vedor Back-end, Desenvolvedor Front-end, Programador Full Stack, Programador Python, Testador
			<br>
			 de Software, em nível inicial.
			</p>
		</div>
		
		<footer id="progrodape">
			<span>
				<img id="logosist" src="../imagens/logosistemacomercio.png" alt="Logo Sistema Comércio" title="Logo Sistema Comércio">
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
	<body>
</html>