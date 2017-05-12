<?php
require_once("model/productos.model.php");

Class ProductosController {
	private $Pmodel;

	public function __CONSTRUCT()
	{
		$this->Pmodel = new ProductosModel();
	}
	public function mainPage()
	{
		require_once("views/include/header.php");
		require_once("views/modules/mod_productos/main_productos.php");
		require_once("views/include/footer.php");
	}
	public function viewCreate()
	{
		require_once("views/include/header.php");
		require_once("views/modules/mod_productos/inser_productos.php");
		require_once("views/include/footer.php");
	}

	public function create(){
		    $data = $_POST["data"];
						$data[2]= "PROD-".date('Ymd').'-'.date('i');
            $result = $this->Pmodel->createProductos($data);
            header("Location: index.php?c=productos&msn=$result");
	}
	public function read()
	{
		require_once("views/include/header.php");
		require_once("views/modules/mod_productos/read_productos.php");
		require_once("views/include/footer.php");
	}

	public function update(){
		  $field = $_GET["rcode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_productos/update_productos.php';
          require_once 'views/include/footer.php';

	}
	public function updateData(){
        	$data = $_POST["data"];
            $result = $this->Pmodel->updateProductos($data);
            header("Location: index.php?c=productos&msn=$result");
    }
    public function delete(){
            $data = $_GET["rcode"];
            $result = $this->Pmodel->deleteProductos($data);
            header("Location: index.php?c=productos&msn=$result");
        }
}

?>
