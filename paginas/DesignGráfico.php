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
			<img src="../imagens/imgcursodesigngrafico.png">
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
			<h2 class="c1">Design Gráfico</h2>
		<div class="paragrlogos2">
			<p class="pjustificado">
			Você sabia que na área de Design existem diversas oportunidades de emprego no Brasil e no exterior? Se 
			<br>
			você sonha com uma carreira versátil, o Design Gráfico é uma ótima opção. Por ser uma área essencial 
			<br>
			para o marketing, comunicação e publicidade, o designer tem sido cada vez mais procurado no mercado.
			<br>
			<br>
			Com o curso Design Gráfico do Senac-RS, você irá aprender sobre os recursos de editoração gráfica,
			<br>
			utilizando aplicativos de desenho e manipulação de imagens, planejando, analisando e selecionando
			<br>
			os elementos necessários à construção de projetos gráficos.
			<br>
			<br>
			Durante a capacitação você saberá criar peças gráficas com o CorelDRAW e Illustrator, preparar arquivos 
			<br>
			para impressão, montar, editar, manipular e tratar imagens no Photoshop. Além disso, você também irá 
			<br>
			produzir publicações para saída eletrônica ou impressa com o InDesign, e, por fim, irá planejar e criar 
			<br>
			peças gráficas com inovação, estética e funcionalidade, considerando as características do projeto que
			<br>
			o cliente deseja.
			<br>
			<br>
			Faça parte do grupo de profissionais qualificados em Design Gráfico e conduza projetos com excelência e
			<br>
			qualidade.
			</p>
		
			<img id="imgdesign" src="../imagens/imgdesign.png">
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