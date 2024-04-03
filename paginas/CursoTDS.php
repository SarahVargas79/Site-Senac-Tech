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
			<img src="../imagens/imgcursods.png">
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
		
			<h2 class="c1">TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS</h2>
		<div class="paragrlogos2">
			<p class="pjustificado">
			O desenvolvimento de novas soluções lhe desafia? Você gostaria de trabalhar em uma multinacional?
			<br>
			O curso Técnico em Desenvolvimento de Sistemas - Bilíngue pode ser o primeiro passo para você 
			<br>
			realizar esses sonhos. Com ele, você terá a qualificação necessária para atuar na área de desenvol-
			<br>
			vimento, com um grande diferencial: a habilidade comunicacional em língua inglesa, para falar com
			<br>
			um mercado cada dia mais globalizado. A área de desenvolvimento de sistemas emprega milhares de
			<br>
			pessoas todos os dias e muitas das vagas não são supridas por falta detalentos. Segundo a Brasscom,
			<br>
			Associação das Empresas de Tecnologia da Informação e Comunicação (TIC) e de Tecnologias Digitais,
			<br>
			o segmento deverá precisar de 70 mil profissionais por ano, até 2024. Chegou a sua vez! Com 1.216
			<br>
			horas, o curso prepara o profissional para desenvolver sistemas computacionais utilizando o ambien-
			<br> 
			-te de desenvolvimento, seguindo as normas e especificações da lógica e das linguagens de programa-
			<br> 
			-ção bem como a modelagem, implementação e manutenção do banco de dados. Além disso, a forma-
			<br> 
			-ção prepara para o desenvolvimento, a manutenção e testes de programas de computador, adotando  
			<br>
			normas técnicas e de qualidade. Apesar de o curso ser bilíngue, o aluno não precisa saber inglês para
			<br> 
			ingressar. As aulas de inglês são  ministradas de acordo com o andamento do conteúdo tecnológico e,
			<br> 
			dessa forma, são trabalhadas a fala, escrita e  leitura relacionadas à profissão. Assim, você estará
			<br> 
			preparado para atuar em diversas frentes de trabalho, podendo empreender na área ou buscar seu 
			<br> 
			primeiro estágio já nos primeiros meses de curso. A qualificação é uma excelente  oportunidade para
			<br> 
			ingressar no mercado de trabalho, com muitas possibilidades de atuação. Venha para o Técnico em
			<br>
			Desenvolvimento de Sistemas - Bilíngue do Senac-RS.     
			</p>
	
			<img id="imgds" src="../imagens/imgds.png">
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