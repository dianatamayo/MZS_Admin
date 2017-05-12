<?php

require_once("model/login.model.php");

Class MainController{
	private $Lmodel;

	public function __CONSTRUCT(){
		$this->Lmodel = new LoginModel();
	}

	// public function mainPage(){
	// 	require_once("views/include/header.php");
	// 	require_once("views/login.php");
	// 	require_once("views/include/footer.php");
	// }
	public function mainPage(){
		require_once("views/include/header.php");
		require_once("views/dashboard.php");
		require_once("views/include/footer.php");
	}
	public function login(){
		$data=$_POST["data"];
		$result = $this->Lmodel->compruebaLogin($data);
		if ($result==true) {
			header("Location:index.php?c=main&a=dashboard");
		}else{
			$msn="Correo O caontraseña invalido";
			header("Location:index.php?c=main&msn=$msn");
		}
	}
}

?>
