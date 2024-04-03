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
			<img src="../imagens/imgcursostec.jpg">
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
			<iframe id="tecvideo" src="https://www.youtube.com/embed/Gtd9uW1n4Wc" title="YouTube video player" frameborder="0"
			allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
			llowfullscreen></iframe>
			
			<p id="pcenter">Selecione uma área de atuação do seu interesse e confira nossos cursos.</p>

		<div id="tecinform">
			<img src="../imagens/logotecinformacao.png">
			<h2 id="tec">Técnico em Informática</h2>
		</div>
		<div class="paragrlogos">
			<p class="pjustificado2">
			Na formação do curso de Técnico em Informática, com carga horária de 1.200 horas, o aluno aprende a planejar 
			<br>
			e executar a montagem e manutenção de computadores, instalar hardware e software, desenvolver algoritmos, 
			<br>
			executar processos de codificação, desenvolver e organizar elementos estruturais de sites, entre outros conteúdos.
			</p>

			<img id="logoti" src="../imagens/logoti.png">
		</div>	
			<a id="saiba" href="CursoTI.php">Saiba Mais &#129122;</a></a>
			
		<div id="tecadm">
			<img src="../imagens/logogestao.png">
			<h2 id="tec">Técnico em Administração</h2>
		</div>
		<div class="paragrlogos">
			<p class="pjustificado2">
			Com duração de 1.000 horas, o curso de Técnico em Administração capacita o aluno para executar atividades 
			<br>
			administrativas relacionadas aos processos de gestão de pessoas, operações logísticas, gestão de materiais e
			<br>
			patrimônio, marketing, vendas e finanças, por meio da prestação de serviços autônomos, temporários ou 
			<br>
			efetivos.
			</p>
			
			<img id="logoadm" src="../imagens/logoadm.png">
		</div>	
			<a id="saiba" href="CursoTADM.php">Saiba Mais &#129122;</a>
		
		
		<div id="tecinform">
			<img src="../imagens/logotecinformacao.png">
			<h2 id="tec">Técnico em Desenvolvimento de Sistemas</h2>
		</div>
		<div class="paragrlogos">
			<p class="pjustificado2">
			No curso de Técnico em Desenvolvimento de Sistemas - Bilíngue, o aluno é preparado para elaborar sistemas 
			<br>
			computacionais utilizando o ambiente de desenvolvimento, sempre seguindo as normas e especificações da 
			<br>
			lógica e das linguagens de programação bem como a modelagem, implementação e manutenção do banco de 
			<br>
			dados.
			</p>
			
			<img id="logods" src="../imagens/logods.jpg">
		</div>	
		<div id="saiba2"><a href="CursoTDS.php">Saiba Mais &#129122;</a></div>
			
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