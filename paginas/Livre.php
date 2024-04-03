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
		<link rel="stylesheet" type="text/css" href="../css/paginacursos.css"/>
		<link rel="shortcut icon" type="image/x.icon" href="../imagens/senac.ico"/>
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
		<div id="m1">	
			<img src="../imagens/imgcursoslivres.jpg">
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
			<p id="pcenter">Selecione uma área de atuação do seu interesse e confira nossos cursos.</p>

		<div id="l1">
			<img src="../imagens/logotecinformacao.png">
			<h2 id="livre">Excel Profissional</h2>
		</div>
		<div class="paragrlogos">
			<p class="pjustificado2">
			O curso de Excel Profissional tem os mais variados recursos utilizados em sala de aula, facilitando o 
			<br>
			processo de aprendizagem. Além disso, contamos com professores altamente qualificados, oferecendo
			<br>
			ao aluno a possibilidade de seguir um caminho formativo para o avanço de sua carreira.
			</p>
			
			<img id="logoexcel" src="../imagens/logoexcel.png"> <!--Trocar logo-->
		</div>	
			<a id="saiba" href="ExcelProfissional.php">Saiba Mais &#129122;</a>
			
		<div id="l2">
			<img src="../imagens/logotecinformacao.png">
			<h2 id="livre">Pilotagem de drones com filmagens e fotografias aéreas</h2>
		</div>
		<div class="paragrlogos">
			<p class="pjustificado2">
			O curso de Pilotagem de Drones com Filmagens e Fotografias Aéreas têm a operação real do equipamento, 
			<br>
			sendo ensinado por docente com experiência profissional. A escola disponibiliza de um equipamento 
			<br>
			moderno para o aprendizado.
			</p>
			
			<img id="logodrone" src="../imagens/logodrone.png">
		</div>
			<a id="saiba" href="PilotagemDrones.php">Saiba Mais &#129122;</a>
		
		<div id="l2">
			<img src="../imagens/logotecinformacao.png">
			<h2 id="livre">Formação em Segurança da Informação</h2>
		</div>
		<div class="paragrlogos">
			<p class="pjustificado2">
			O curso em segurança da informação, ensinará as principais técnicas de defesa e com 
			<br>
			metodologias utilizadas para planejar, implantar e gerir mecanismos de segurança 
			<br>
			apropriados para a organização!
			</p>
			
			<img id="logosecurity" src="../imagens/logosecurity.png">
		</div>	
			<a id="saiba" href="SegurancaInform.php">Saiba Mais &#129122;</a>

		<div id="l2">
			<img src="../imagens/logotecinformacao.png">
			<h2 id="livre">Informática Profissinal - Office e Mobile</h2>
		</div>	
		<div class="paragrlogos">
			<p class="pjustificado2">
			O curso de Informática Profissional – Office Mobile tem laboratórios de informática modernos e docentes 
			<br>
			altamente qualificados, trazendo para a sala de aula experiencias essenciais para o futuro profissional 
			<br>
			se destacar no dia a dia do mercado de trabalho. 
			</p>
		
			<img id="logoofficemobile" src="../imagens/logoofficemobile.jpg">
		</div>	
			<a id="saiba" href="InformaticaProfiss.php">Saiba Mais &#129122;</a>
			
		<div id="l2">
			<img src="../imagens/logotecinformacao.png">
			<h2 id="livre">Corel Draw</h2>
		</div>	
		<div class="paragrlogos">
			<p class="pjustificado2">
			O curso de Corel DRAW tem o aprendizado baseado na prática, com a manipulação de  softwares 
			<br>
			de alta tecnologia, utilizando laboratórios de Informática equipados e com docentes altamente
			<br>
			qualificados.  
			</p>
			
			<img id="logodraw" src="../imagens/logodraw.png">
		</div>
			<a id="saiba" href="CorelDraw.php">Saiba Mais &#129122;</a>	
		
		<div id="l2">
			<img src="../imagens/logotecinformacao.png">
			<h2 id="livre">Photoshop</h2>
		</div>
		<div class="paragrlogos">
			<p class="pjustificado2">
			O curso é destinado para todas as pessoas que desejam atuar de forma profissional, que possuem o ensino
			<br>
			fundamental completo, com idade mínima de 16 anos. Para participar é necessário ter o curso de Windows
			<br>
			e Internet ou conhecimento equivalente.
			</p>
			
			<img id="logops" src="../imagens/logops.png">
		</div>	
			<a id="saiba" href="Photoshop.php">Saiba Mais &#129122;</a>

		<div id="l2">
			<img src="../imagens/logodesign.png">
			<h2 id="livre">Design Gráfico</h2>
		</div>	
		<div class="paragrlogos">
			<p class="pjustificado2">
			O curso de Design Gráfico tem o aprendizado baseado na prática, com a manipulação de softwares de alta tecnologia, 
			<br>
			utilizando laboratórios de Informática equipados e com docentes altamente qualificados. Além disso, durante a 
			<br>
			capacitação você aprenderá por meio da resolução de problemas e projetos, aumentando sua capacidade profissional. 
			</p>
			
			<img id="logodesign2" src="../imagens/logodesign2.png">
		</div>	
			<a id="saiba" href="DesignGráfico.php">Saiba Mais &#129122;</a>
			
		<div id="l2">
			<img src="../imagens/logoartes.png">
			<h2 id="livre">Fotografia Digital com Photoshop</h2>
		</div>	
		<div class="paragrlogos">
			<p class="pjustificado2">
			O curso de Fotografia Digital tem como diferencial a utilização de um equipamento profissional em sala de aula. 
			<br>
			As técnicas serão ensinadas por um docente com experiência profissional, com atividades na prática que simulam 
			<br>
			as rotinas do dia a dia de um profissional de fotografia.  
			</p>
			
			<img id="logophotops" src="../imagens/logophotops.jpg">
		</div>	
		<div id="saiba2"><a href="FotoDigitalPS.php">Saiba Mais &#129122;</a></div>
			
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

	