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
	<link rel="stylesheet" type="text/css" href="../css/formularioFC.css"/>
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
		<h2 id="fc1">Fale Conosco</h2>
		<form action="../enviaFormulario.php" method="post">
		<!--fieldset - É usada para agrupar elementos-->
			<fieldset> <!--Inicio - Tag mãe-->
				<p id="pcenter">
				O Senac-RS tem a maior satisfação em atendê-lo.
				<br>
				Importante: preencha corretamente os campos do 
				<br>
				formulário a seguir, para que possamos lhe dar um retorno.
				<br>
				Todos os campos são obrigatórios.
				</p>
				<fieldset class="bloco">
				<!--fieldset do campo nome-->
					<div class="dados">
						<label>*Nome Completo:</label>
						<input type="text" id="nomecompleto" name="nomeCompleto" required>
					</div>
				</fieldset>
				<fieldset class="bloco">
				<!--fieldset do campo estado-->
					<div class="dados">
						<label>*UF:</label>
						<select id="uf" name="estados" required>
						<option selected="" value="">Selecione o Estado (UF)</option>
						<option value="Acre">Acre</option>
						<option value="Alagoas">Alagoas</option>
						<option value="Amapá">Amapá</option>
						<option value="Amazonas">Amazonas</option>
						<option value="Bahia">Bahia</option>
						<option value="Ceará">Ceará</option>
						<option value="Distrito Federal">Distrito Federal</option>
						<option value="Espírito Santo">Espírito Santo</option>
						<option value="Goiás">Goiás</option>
						<option value="Maranhão">Maranhão</option>
						<option value="Mato Grosso">Mato Grosso</option>
						<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
						<option value="Minas Gerais">Minas Gerais</option>
						<option value="Pará">Pará</option>
						<option value="Paraíba">Paraíba</option>
						<option value="Paraná">Paraná</option>
						<option value="Pernambuco">Pernambuco</option>
						<option value="Piauí">Piauí</option>
						<option value="Rio de Janeiro">Rio de Janeiro</option>
						<option value="Rio Grande do Sul">Rio Grande do Sul</option>
						<option value="Rio Grande do Norte">Rio Grande do Norte</option>
						<option value="Rondônia">Rondônia</option>
						<option value="Roraima">Roraima</option>
						<option value="Santa Catarina">Santa Catarina</option>
						<option value="São Paulo">São Paulo</option>
						<option value="Sergipe">Sergipe</option>
						<option value="Tocantins">Tocantins</option>
						</select>
					</div>
				</fieldset>
				<fieldset class="bloco">
				<!--fieldset do campo cidade-->
					<div class="dados">
						<label>*Cidade:</label>
						<input type="text" id="cidade" name="cidade" required>
					</div>
				</fieldset>
				<fieldset class="bloco">
				<!--fieldset do campo e-mail-->
					<div class="dados">
						<label>*E-mail:</label>
						<input type="email" id="email" name="email" required placeholder="nome@dominio.com" onchange="validar()">
					</div>
				</fieldset>
				<fieldset class="bloco">
				<!--fieldset do campo confirme e-mail-->
					<div class="dados">
						<label>*Confirme o E-mail:</label>
						<input type="email" id="confirmemail" name="confirmEmail" required placeholder="nome@dominio.com" onchange="validar()">
					</div>
				</fieldset>
				<fieldset class="bloco">
				<!--fieldset do campo telefone-->
					<div class="dados">
						<label>*Telefone:</label>
						<input type="tel" id="fone" name="fone" placeholder="(xx) xxxxx-xxxx" required> <!-- pattern - Vai colocar regras no formulário-->
					</div>
				</fieldset>
				<fieldset class="bloco">
				<!--fieldset do campo modalidade-->
					<div class="dados">
						<label>*Modalidade:</label>
						<select id="modal" name="modalidade" required>
						<option value="cursotecead">Curso Técnico EAD</option>
						<option value="cursopresencial">Curso Presencial</option>
						</select>
					</div>
				</fieldset>
				<fieldset class="bloco">
				<!--fieldset do campo assunto-->
					<div class="dados">
						<label>*Assunto:</label>
						<select id="assunto" name="assunto" required>
						<option selected value="">Selecionar o assunto</option>
						<option value="duvidasinfor">Dúvidas/Informações</option>
						<option value="solicit">Solicitações</option>
						<option value="elogios">Elogios</option>
						<option value="sugestoes">Sugestões</option>
						<option value="reclamacoes">Reclamações</option>
						</select>
					</div>
				</fieldset>
				<fieldset class="bloco">
				<!--fieldset do campo mensagem-->
					<div class="dados">
						<label>*Mensagem:</label>
						<textarea name="obs" id="obs" rows="4" cols="30"></textarea>
					</div>
				</fieldset>
				<fieldset class="bloco">
				<!--fieldset do campo cpf-->
					<div class="dados">
						<label>*CPF:</label>
						<input type="text" name="cpf" placeholder="nnn.nnn.nnn-nn" required>
					</div>
				</fieldset>
				<button type="submit" class="botao" name="submit">Enviar</button>
				<br>
				<p id="pcenter">
				Obs: O Senac-RS se reserva o direito de não responder a anônimos.
				<br>
				Atenção: Os itens marcados com * são de preenchimento obrigatório.
				</p>
				<br>
				<div id="linkcenter">
				<a  href="https://portalapi.senacrs.com.br/api/media/siteKey/PoliticaPrivacidade" target="black">Conheça a Política de Privacidade do Senac-RS.</a>
				</div>
			</fieldset> <!--Fim - Tag mãe-->
		</form>

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
		<script>
		function validar(){
			var campo1 = document.getElementById("email");
			var campo2 = document.getElementById("confirmemail");
			if(campo1.value != campo2.value){
				campo2.setCustomValidity("O e-mail não confere");
				campo2.validity = false;
			}else{
				campo2.setCustomValidity("");
				campo2.validity = true;
			}
		}
	</script>
	</body>
</html>