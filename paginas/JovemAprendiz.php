<?php
	session_start();
?>
<!DOCTYPE html> 
<html lang="pt-br">
	<head>
		<title>Senac-RS | Jovem Aprendiz</title>
		<meta charset="UTF-8">
		<meta name="description" content="Está página é uma atividade, site Senac Tech"> <!-- Descreve o conteúdo que vai ter na página -->
		<meta name="keywords" content="HTML, Site Senac Tech"> <!-- Palavras chaves -->
		<meta name="author" content="Sarah Rafaela V. de A. Moreira">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Sempre vai inicializar 1.0 a página, para abrir a página nas telas de outros dispositivos de acordo com o tamanho-->	
	
		<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="../css/aprendiz.css"/>
		<link rel="shortcut icon" type="image/x.icon" href="../imagens/senac.ico"/>
	</head>
	<body>
		<div id="cabecalho">
			<img id="logosenac" src="../imagens/logosenac.png" alt="Senac Fecomércio Sesc" title="Senac Fecomércio Sesc">
			<span>
			<a href="https://twitter.com/senacrs" target="black">
						<img id="imgredes" src="../imagens/logotwi2.png" alt="Twitter" title="Twitter"> </a>
					<a  href="https://www.instagram.com/senacrs/" target="black">
						<img id="imgredes" src="../imagens/logoinst2.png" alt="Instagram" title="Instagram"> </a>
						<a  href="https://www.facebook.com/senacrsoficial" target="black">
							<img id="imgredes" src="../imagens/logoface2.png" alt="Facebook" title="Facebook"> </a>
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
			<img class="banner" src="../imagens/bannerjovemaprendiz.jpg">
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
			<h3 id="j1">
			O Programa Jovem Aprendiz do Senac tem como objetivo inserir jovens 
			<br>
			no mercado do trabalho, conforme a Lei 10.097/2000, e oferece cursos 
			<br>
			de Aprendizagem Profissional nas áreas do Comércio de Bens, Serviços
			<br>
			e Turismo, cada qual tratando de uma ou mais ocupações.
			</h3>
		
		<div id="j2">
			<div id="videoja">
				<iframe src="https://www.youtube.com/embed/5c4IkasDBqQ" title="Jovem Aprendiz Senac: Oportunidades que mudam vidas." frameborder="0" allow="accelerometer; 
				autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>	
			<div id="jlink">
				<h2 id="link1"><a href="#Empresa_contratante">Quero ser uma empresa contratante</a></h2>
				<br>
				<h2 id="link2"><a href="#Jovem_Aprendiz">Quero ser um Jovem Aprendiz</a></h2>
			</div>	
		</div>
		
		<div id="j3">	
	
			<div id="Empresa_contratante">
				<h1 id="jcenter">
				Deseja contratar um aprendiz Senac? 
				<br>
				Confira as etapas abaixo
				</h1>
			</div id="pcenter">
				<div id="pj">
				<p id="pjustificado">
				<label>1.</label> Semestralmente, publicamos o Edital da Aprendizagem, apresentando a programação de turmas, por cidade e vagas disponíveis;
				<br>
				<br>
				<label>2.</label> Se sua empresa é contribuinte do Senac, consulte o Edital e siga as instruções para reserva de vagas gratuitas;
				<br>
				<br>
				<label>3.</label> Se sua empresa não é contribuinte, entre em contato com a escola Senac mais próxima e solicite uma proposta;
				<br>
				<br>
				<label>4.</label> Para obter informações detalhadas sobre o Programa Jovem Aprendiz Senac-RS consulte o Guia de Orientação às Empresas;
				<br>
				<br>
				<label>5.</label> Em até 7 dias úteis, você receberá um e-mail de resposta do Senac referente à sua solicitação;
				<br>
				<br>
				<label>6.</label> Após o retorno do Senac com as vagas contempladas, você pode proceder com a contratação do aprendiz e encaminhá-lo com a 
				<br>
				documentação completa até 15 dias antes do início da turma.
				</p>
				</div>
			</div>
		
		<div id="jlinkempcontrat">
			<h2 id="link3">
				<a href="https://senacrs.com.br/hotsite/jovemaprendiz/docs/2023_2/EDITAL%20APRENDIZAGEM%202023%20-%202%C2%BA%20Semestre.pdf" target="black">
				Edital para empresas contribuintes
				</a>
			</h2>
			<br>
			<h2 id="link4">
				<a href="https://senacrs.com.br/hotsite/jovemaprendiz/docs/2023/ANEXO%205%20-%20GUIA%20DE%20ORIENTA%C3%87%C3%83O%20%C3%80S%20EMPRESAS.pdf" target="black">
				Guia de Orientação às Empresas
				</a>
			</h2>
		</div>	
		
		<div id="Jovem_Aprendiz">
			<h1 id="jcenter">Quais são os requisitos?</h1>
		</div>
		<div id="jcontainer">
			<div id="jtextCenter">
				<h3>Idade</h3>
				<img src="../imagens/imgitem1.png">
				<p>
				Ter entre
				<br>
				<label>14 e 24 anos*</label>
				</p> 
			</div>
			<div id="jtextCenter">
				<h3>Escolaridade</h3>
				<img src="../imagens/imgitem2.png">
				<p>
				Estar cursando    
				<label>escola regular</label>
				<br>
				Ou 
				<br>
				Ter concluído o
				<label>Ensino Médio</label>
			</div>
			<div id="jtextCenter">
				<h3>Contrato</h3> 
				<img src="../imagens/imgitem3.png">
				<p>Ser contratado como
				<br>
				<label>Jovem Aprendiz</label> 
				</p>
			</div>
		</div>
		
			<br>
			
			<p id="jcenter">*não há limite de idade para pessoas com deficiência</p>
			
			<h1 id="j4">
			Busque uma 
			<br>
			<label>oportunidade</label>
			</h1>
			
			<p id="pj5">
			Procure na Internet e veículos de comunicação,
			<br> 
			empresas do comércio e de serviços que estejam
			<br> 
			contratando aprendizes.
			<br>
			<br>
			Após a contratação, a empresa encaminhará sua
			<br> 
			matrícula em um curso de aprendizagem profissional
			<br> 
			comercial do Senac-RS.
			</p>
		
		<footer id="jrodape">
			<span>
				<img id="logoj" src="../imagens/logojovemaprendiz.png">
				<img id="logosenac" src="../imagens/logosenac2.png">
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