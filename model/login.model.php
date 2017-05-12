<?php 

Class LoginModel{
	private $pdo;

	public function __CONSTRUCT(){
    try {
      $this->pdo = DataBase::connect();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die($e->getMessage()."".$e->getLine()."".$e->getFile());
    }
 }
 	public function compruebaLogin($data){
 		try{ 
 			$sql="SELECT * FROM mzscann_usuarios WHERE usu_nombre_comp = ? AND usu_mail = ?";
 			$query=$this->pdo->prepare($sql);
 			$query->execute(array($data[0],$data[1]));
 			$result=$query->fetch(PDO::FETCH_BOTH);
 			if(count($result[0])>0){
        		return true;
      		}else {
      		  return false;
     		}
     		
 		}catch(PDOException $e){
 			die($e->getMessage()."".$e->getLine()."".$e->getFile());
 		}
 	}
}

?>