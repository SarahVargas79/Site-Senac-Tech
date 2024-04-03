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
	
	<link rel="stylesheet" type="text/css" href="./css/estilo.css"/>
	<link rel="stylesheet" type="text/css" href="./css/menu.css"/>
	<link rel="shortcut icon" type="image/x.icon" href="./imagens/senac.ico"/>
</head>

<body>
	<div id="cabecalho">
		<img id="logosenac" src="imagens/logosenac.png" alt="Senac Fecomércio Sesc" title="Senac Fecomércio Sesc">
		<span>
		<a href="https://web.whatsapp.com/send?text=https%3A%2F%2Fwww.fecomercio-rs.org.br%2Fnoticiadetalhe%2F2023%2F01%2F23%2FSenac-Tech-Programa-PIDS-Tech-atua-em-prol-da-inclusao-digital-%2F8689dadf-c938-4f12-9312-7865d5c1ee84"
						target="black">
			<img id="imgwhats" src="./imagens/logowhats.png" alt="Whatsapp" title="Whatsapp"> </a>
		<a  href="https://www.facebook.com/senacrsoficial" target="black">
			<img id="imgredes" src="./imagens/logoface.png" alt="Facebook" title="Facebook"> </a>
			<a  href="https://www.instagram.com/senacrs/" target="black">
				<img id="imgredes" src="./imagens/logoinst.png" alt="Instagram" title="Instagram"> </a>
				<a href="https://twitter.com/senacrs" target="black">
					<img id="imgredes" src="./imagens/logotwi.png" alt="Twitter" title="Twitter"> </a>
						
		</span>	
	</div>
	
	<section>
		<nav id="menu">
			<div class="topnav" id="myTopnav">
					<a href="index.php" class="active">Home</a>
				<div class="dropdown">
				<button class="dropbtn">Cursos</button>
					<div class="dropdownsub">
					  <a href="paginas/Livre.php">Livre</a>
					  <a href="paginas/Tecnico.php">Técnico</a>
					  <a href="paginas/JovemAprendiz.php">Jovem Aprendiz</a>
					  <a href="paginas/ProgramaRSTI.php">Programa RS TI</a>
					</div>
				</div>
					<a href="paginas/Eventos.php">Eventos</a>
					<a href="paginas/Cadastro.php">Cadastro</a>
					<a href="paginas/Login.php">Login</a>
					<a href="paginas/FaleConosco.php">Fale Conosco</a>
					<a href="paginas/Localizacao.php">Localização</a>
					
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
		<img id="imgm" src="imagens/senactech2.png">
	</div>
		<?php
		if(isset($_SESSION['email_cad_sessao'])){
			echo '<p class="mensagem">Olá '.$_SESSION['email_cad_sessao'].', seja bem-vindo</p>';
			echo "<a class='login' href='paginas/Cadastro.php?logout'>Logout</a>";
		}else{
			echo "<a class='login' href='paginas/Login.php'><br>Faça seu login</a>";
		}
		if(isset($_GET['logout'])){
			session_destroy();
			header("Location: index.php");
		}
		?>
		<h2 class="c1">Histórico</h2>

		<h3 class="c2">SOBRE O SENAC-RS</h3>

		<p class="pjustificado">
				O Serviço Nacional de Aprendizagem Comercial – Senac é uma instituição de educação profissional, fundada em
				10 de janeiro de 1946 com o objetivo de colaborar na obra, difusão e
				aperfeiçoamento do ensino profissional no setor terciário. No Rio Grande do Sul, o Senac foi instalado em 13
				de setembro do mesmo ano e nos mais de 70 anos de atuação já capacitou
				mais de 8 milhões de gaúchos. A instituição cumpre a importante missão de educar para o trabalho em
				atividades do comércio de bens, serviços e turismo. O Senac-RS faz parte da
				Federação do Comércio de Bens e Serviços do Rio Grande do Sul – Fecomércio-RS, o que vincula a entidade ao
				mundo do trabalho por meio de 530 mil empresas do comércio de bens,
				serviços e turismo – que geram um milhão de empregos formais.
				<br>
				<br>
				O Senac-RS disponibiliza educação em todos os níveis – do Menor Aprendiz à Pós-Graduação. Atualmente, a
				entidade conta com duas faculdades – Faculdade Senac Porto e Faculdade
				de Tecnologia Senac Pelotas, e mais de 60 postos de atendimento, entre escolas e unidades, que possibilitam
				o Senac atender a todos os 497 municípios gaúchos.
				<br>
				<br>
				Muito antes de se falar em responsabilidade social, o Senac já exercia, na prática, a inclusão social ao
				preparar menores aprendizes para o mundo do trabalho. Mais do que ser a sua razão
				de existir, o Menor Aprendiz é a prova da importância e contribuição da Instituição para a educação
				profissional brasileira. Vinculados ao programa Jovem Aprendiz, por meio da Lei Federal
				10.097/200 e Decreto nº 5598/2005, os cursos de Aprendizagem Comercial, oferecidos gratuitamente pelo
				Senac-RS, envolvem os alunos em aulas que variam de 1.100 a 1.200 horas de atividades
				curriculares, das quais metade se referem à capacitação teórica e a outra metade à prática supervisionada
				(realizada nas dependências da empresa).
				<br>
				<br>
				O Programa Senac de Gratuidade (PSG), resultado de um acordo entre o Senac e o Governo Federal em 2008,
				significa educação profissional de qualidade para que milhares de pessoas possam
				planejar seus estudos e ter mais oportunidade de trabalho e emprego. O PSG oferece cursos de Aprendizagem,
				cursos de nível técnico, qualificação técnica, cursos de capacitação e
				aperfeiçoamento, totalizando mais de 10 mil alunos atendidos gratuitamente nas unidades educacionais do
				Estado. Para ter acesso a esses cursos, os candidatos deverão atender aos seguintes
				critérios: pessoas com baixa renda, na condição de alunos matriculados ou egressos da educação básica e
				trabalhadores – empregados ou desempregados-, priorizando-se aqueles que satisfizerem
				as duas condições (aluno e trabalhador). Além disso, a Instituição desenvolve diversos projetos sociais em
				parceria com empresas e organização não-governamentais (ONG´s).
				<br>
				<br>
				Considerando a rapidez das informações e do desenvolvimento tecnológico, o Senac oferece cursos de
				capacitação em horários alternativos, aplicando metodologias diferenciadas e personalizadas,
				laboratórios de alta tecnologia, atendimentos individualizados em ambientes modernos e confortáveis. Nos
				diversos níveis de capacitação, através de aulas presenciais ou à distância, o modelo
				pedagógico está baseado na apropriação de competências para o trabalho. O Senac propõe a qualificação de um
				indivíduo capaz de articular conhecimentos, habilidades e atitudes com o objetivo de
				agir, decidir e intervir em situações nem sempre previstas dentro e fora do mundo do trabalho, promovendo a
				construção da cidadania.
			</font>
		</p>

	<div id="dps">
	
		<h2>#mudandoavida</h2>
	
	<div id="dt">
		<img src="imagens/img1.jfif" alt="undefined">
		<p class="pjustificado">
			<label id="pnome">Isabel Cassiana Lauck da Rosa</label> 
			<br>
			DICÇÃO.DESINIBIÇÃO.ORATÓRIA
			<br>
			O curso de Dicção do Senac Taquara ajudou muito na minha postura  
			<br>
			e segurança para falar em público. Depois deste curso tenho mais
			<br>
			consciência da importância da comunicação em nossas vidas. As aulas
			<br>
			foram bem interativas e práticas, a escola é muito acolhedora e com 
			<br>
			ótimo atendimento.
		</p>
	</div>
	
	<div>
		<img src="imagens/img2.jfif" alt="undefined">
		<p class="pjustificado">
		<label id="pnome">Matheus Flôres</label> 
		<br> 
		Téc. Informática 2014.10 M. 1
		<br>
		Desde pequeno, eu sempre tive muita afinidade com a área da informática e, até por
		<br>
		isso, resolvi fazer o curso. O método de ensino, as propostas feitas pelos professores,
		<br>
		os laboratórios, entre outras atividades, me roporcionaram uma evolução que eu nem 
		<br>
		achei que fosse possível. Aprendi a trabalhar em equipe, a lidar com problemas, além 
		<br>
		de ter uma turma maravilhosa, sempre unida. Na escola, ganhei muitos amigos que  
		<br>
		quero levar para a vida toda.
		</p>
	</div>
	
	</div>

		<hr id="c3">
		
	<div>
		<iframe id="videohome" src="https://www.youtube.com/embed/c2ptmroeOwQ" title="YouTube video player" frameborder="0"
			allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
			allowfullscreen></iframe>
	</div>
		<hr id="c3">

		<h2 id="c4">Senac Tech: Programa PIDS Tech atua em prol da inclusão digital</h2>
	
		<img id="imgpids" src="imagens/photoProgPIDSTech.jpg"> 

		<p id="pjustificado"> 
			Para quem possui computadores desktop, laptop, monitores, teclado e mouse que não utiliza mais e não sabe como descartá-los da maneira correta,
			<br>
			eles podem ter um destino útil e solidário. Isso porque o Senac Tech recebe anualmente doações em sua escola por meio do PIDS Tech — Programa
			<br>
			de inclusão digital Senac Tech — , que consiste em coletar computadores para que instituições, escolas, ONGS, ou até mesmo alunos da escola, que
			<br>
			ainda não tenham condições financeiras para a compra desses equipamentos, possam ter acesso à informação e às tecnologias.
			<br>
		</p>

		<p class="pjustificado2">
			Os equipamentos podem ser entregues ao longo de todo o ano de 2023 no endereço do Senac Tech, que está localizado na Avenida
			<br>
			Venâncio Aires, 93, no bairro Cidade Baixa, em Porto Alegre. A iniciativa já ocorre há sete anos e é uma ação pedagógica coordena-
			<br>
			-da pelo docente do curso Técnico em Informática Miguel Angelo Matiolla com seus alunos.
			<br>
			<br>
			Só em 2022, foram doados mais de 100 computadores para a comunidade. “Para os nossos alunos, além de colocarem em prática
			<br>
			todo conhecimento (Hard Skills) adquirido no curso, realizando a manutenção desses computadores para doação, incentivamos
			<br>
			também o desenvolvimento de suas habilidades e atitudes (Soft Skills). Por meio dessa ação social, percebemos uma imensa
			<br>
			satisfação dos nossos alunos que participam do projeto, principalmente por mudarem a vida das pessoas contempladas”,
			<br>
			ressalta Matiolla.
			<br>
			<br>
			No módulo de Assistente de Suporte e Manutenção de Computadores, do curso Técnico Informática, os alunos desenvolvem todos  
			<br>
			os conhecimentos necessários para realizar a manutenção e configuração de microcomputadores. Diante disso, eles conseguem 
			<br>
			aplicar todo o conhecimento adquirido no curso juntamente com o fornecimento de computadores e seus periféricos, considerados 
			<br>
			inativos para uso, vindos de empresas privadas, públicas ou até de pessoas físicas.
			<br>
			<br>
			Mais informações podem ser obtidas pelo telefone (51) 3288-7750 ou pelo e-mail do setor pedagógico da instituição
			<br>
			pdgtech@senacrs.com.br.
		</p>

		<h2 id="c5">Fotos</h2>

	<div id="imgdual">
		<img  src="imagens/photoPIDSTech.jpeg" alt="undefined">
		<img  src="imagens/photo2PIDSTech.jpeg" alt="undefined">
	</div>
	
	<footer>
		<span>
			<img src="imagens/logosenac2.png">
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