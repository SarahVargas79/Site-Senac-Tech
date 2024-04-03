<?php
	class Usuario{
		private $nomeCompl;
		private $uf;
		private $cidade;
		private $email;
		private $confirmEmail;
		private $fone;
		private $modalidade;
		private $assunto;
		private $mensagem;
		private $cpf;

		public function getNomeCompleto(){
			return $this -> nomeCompleto;
		}
		public function getEstados(){
			return $this -> estados;
		}
		public function getCidade(){
			return $this -> cidade;
		}
		public function getEmail(){
			return $this -> email;
		}
		public function getConfirmarEmail(){
			return $this -> confirmEmail;
		}
		public function getFone(){
			return $this -> fone;
		}
		public function getModalidade(){
			return $this -> modalidade;
		}
		public function getAssunto(){
			return $this -> assunto;
		}
		public function getMensagem(){
			return $this -> mensagem;
		}
		public function getCPF(){
			return $this -> cpf;
		}
		
		public function setNomeCompleto($nomeCompl){
			$this -> nomeCompleto = $nomeCompl;
		}
		public function setEstados($uf){
			$this -> estados = $uf;
		}
		public function setCidade($cidade){
			$this -> cidade = $cidade;
		}
		public function setEmail($email){
			$this -> email = $email;
		}
		public function setConfirmarEmail($confirmEmail){
			$this -> confirmEmail = $confirmEmail;
		}
		public function setFone($fone){
			$this -> fone = $fone;
		}
		public function setModalidade($modalidade){
			$this -> modalidade = $modalidade;
		}
		public function setAssunto($assunto){
			$this -> assunto = $assunto;
		}
		public function setMensagem($mensagem){
			$this -> mensagem = $mensagem;
		}
		public function setCPF($cpf){
			$this -> cpf = $cpf;
		}
	}
?> 