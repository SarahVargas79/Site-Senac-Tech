<?php
require ('conexao.php');
require ('dadosForm.class.php');

$nomeCompl = $_POST['nomeCompleto'];
$uf = $_POST['estados'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$confirmEmail = $_POST['confirmEmail'];
$fone = $_POST['fone'];
$modalidade = $_POST['modalidade'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['obs'];
$cpf = $_POST['cpf'];

$usu = new Usuario();
$usu -> setNomeCompleto($nomeCompl);
$usu -> setEstados($uf);
$usu -> setCidade($cidade);
$usu -> setEmail($email);
$usu -> setConfirmarEmail($confirmEmail);
$usu -> setFone($fone);
$usu -> setModalidade($modalidade);
$usu -> setAssunto($assunto);
$usu -> setMensagem($mensagem);
$usu -> setCPF($cpf);

if($email == "" || $email == null){
		echo "<script language='javascript' type='text/javascript' >alert('O campo email deve ser preeenchido'); window.location.href = 'paginas/FaleConosco.php';</script>";
	}else{
			$inserir = "INSERT INTO faleconosco(nomeCompleto, uf, cidade, email, confirmarEmail, telefone, modalidade, assunto, mensagem, cpf)VALUES('".$usu -> getNomeCompleto()."', '".$usu -> getEstados()."', '".$usu -> getCidade()."', '".$usu -> getEmail()."', '".$usu -> getConfirmarEmail()."', '".$usu -> getFone()."', '".$usu -> getModalidade()."', '".$usu -> getAssunto()."', '".$usu -> getMensagem()."', '".$usu -> getCPF()."')";
			$executar = mysqli_query($conn, $inserir);
			if($executar){
				echo "<script language='javascript' type='text/javascript' >alert('Formulário enviado com sucesso!'); window.location.href = 'index.php';</script>";
			}else{
				echo "<script language='javascript' type='text/javascript' >alert('Não foi possível enviar formulário'); window.location.href = 'paginas/FaleConosco.php';</script>";
			}
		}

//Finaliza a conexão dom o banco;
$conn -> close();

?>