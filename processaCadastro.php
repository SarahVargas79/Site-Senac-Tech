<?php
require ('conexao.php');
require ('dadosCad.class.php');

$nomeCompl = $_POST['nomeCompleto'];
$fone = $_POST['fone'];
$estado = $_POST['estados'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];

$usu = new Usuario();
$usu -> setNomeCompleto($nomeCompl);
$usu -> setFone($fone);
$usu -> setEstados($estado);
$usu -> setCidade($cidade);
$usu -> setEmail($email);
$usu -> setSenha($senha);
$usu -> setCPF($cpf);


$criptografia = md5($senha);
	
	if($email == "" || $email == null){
		echo "<script language='javascript' type='text/javascript' >alert('O campo email deve ser preeenchido'); window.location.href = 'paginas/Cadastro.php';</script>";
	}else{
		if($senha == "" || $senha == null){
			echo "<script language='javascript' type='text/javascript' >alert('O campo senha deve ser preeenchido'); window.location.href = 'paginas/Cadastro.php';</script>";
			die();
		}
		else{
			$inserir = "INSERT INTO cadastro(nomeCompleto, telefone, estado, cidade, email, senha, cpf)VALUES('".$usu -> getNomeCompleto()."', '".$usu -> getFone()."', '".$usu -> getEstados()."', '".$usu -> getCidade()."', '".$usu -> getEmail()."', '$criptografia', '".$usu -> getCPF()."')";
			$executar = mysqli_query($conn, $inserir);
			if($executar){
				echo "<script language='javascript' type='text/javascript' >alert('Cadastro realizado com sucesso!'); window.location.href = 'paginas/Login.php';</script>";
			}else{
				echo "<script language='javascript' type='text/javascript' >alert('Não foi possível realizar o cadastro'); window.location.href = 'paginas/Cadastro.php';</script>";
			}
		}
	}

//Finaliza a conexão dom o banco;
$conn -> close();
?>