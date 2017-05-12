<?php
//require_once("model/qr.model.php");
Class QrController {
	private $Qmodel;
public function mainPage(){
  require_once("views/include/header.php");
  require_once("views/modules/mod_qr/qr.php");
  require_once("views/include/footer.php");
}
}
 ?>
