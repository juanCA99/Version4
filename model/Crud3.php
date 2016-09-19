	<?php  

 



/**
* 
*/
class Crud3 extends Conexion
{
	private $Id_cotizacion_de_compra,$Nombre_usuario,$Telefono,$Direccion,$Nombre_electrodomestico,$Precio_unitario,$Cantidad,$Precio_total;
	private $model;

	public function __construct()
	{
		$this->model= parent::__construct();
	}
	public function getId_cotizacion_de_compra() {
		return $this->id_electrodomestico;
	}
	public function setId_cotizacion_de_compra($Id_cotizacion_de_compra) {
		$this->Id_cotizacion_de_compra= $Id_cotizacion_de_compra;
	}
	public function getNombre_usuario() {
		return $this->Nombre_usuario;
	}
	public function setNombre_usuario($Nombre_usuario) {
		$this->Nombre_usuario= $Nombre_usuario;
	}
	public function getTelefono() {
		return $this->Telefono;
	}
	public function setTelefono($Telefono) {
		$this->Telefono= $Telefono;
	}
	public function getDireccion() {
		return $this->Direccion;
	}
	public function setDireccion($Direccion) {
		$this->Direccion= $Direccion;
	}
	public function getNombre_electrodomestico() {
		return $this->Nombre_electrodomestico;
	}
	public function setNombre_electrodomestico($Nombre_electrodomestico) {
		$this->Nombre_electrodomestico= $Nombre_electrodomestico;
	}
	
	public function setPrecio_unitario($Precio_unitario) {
		$this->Precio_unitario= $Precio_unitario;
	}

	public function getCantidad() {
		return $this->Cantidad;
	}
	public function setCantidad($Cantidad) {
		$this->Cantidad= $Cantidad;
	}
	public function getPrecio_total(){
		return $this->Precio_total;
	}

	public function setPrecio_total($Precio_total){
		$this->Precio_total=$Precio_total;
	}
	
	public function insertar() {
		try{
			$query="INSERT INTO cotizaciones(id,Id_cotizacion_de_compra,Nombre_usuario,Telefono,Direccion,Nombre_electrodomestico,Precio_unitario,Cantidad,Precio_total) VALUES(NULL,'".$this->Id_cotizacion_de_compra."','".$this->Nombre_usuario."','".$this->Telefono."','".$this->Direccion."','".$this->Nombre_electrodomestico."')".$this->Precio_unitario."')".$this->Cantidad."')".$this->Precio_total."')";

		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return true;
	} catch (PDOException $e) {
		return false;
	}
	}
	public function Eliminar()
    {
        try 
        {
        	/*$query="DELETE FROM usuarios WHERE documento='".$this->documento."'";*/
            $query="DELETE FROM cotizaciones WHERE Id_cotizacion_de_compra='".$this->Id_cotizacion_de_compra."'"; 


        $stmt=$this->model->prepare($query);
		$stmt->execute();
            return true;
        } catch (Exception $e) 
        {
            return false;

        }
    }
   /* public function actualizar() {


    	 $stmt = $con->prepare( 'UPDATE prueba SET usuarios = :usuarios WHERE usuario = :usuario' );
    	 $rows = $stmt->execute( array( ':nombre'   => $nom,':apellidos' => $ape));

  	try {
    	echo 'Actualización correcta';
  	
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	}
    }*/
    public function consultaId_cotizacion_de_compra() {
    	try {
    		$query= "SELECT * FROM cotizaciones  WHERE  Id_cotizacion_de_compra='".$this->Id_cotizacion_de_compra."'";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetch(PDO::FETCH_ASSOC);
    	} catch (PDOException $e) {
    		return false;
    	}
    }
    public function listar() {

    	try {
    		$query= "SELECT * FROM cotizaciones";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetchAll(PDO::FETCH_OBJ);
    	} catch (PDOException $e) {
    		return false;
    	}
    }
    public function editar() {
    	try {
    		$query="UPDATE cotizaciones SET Nombre_usuario='".$this->Nombre_usuario."' ,Telefono='".$this->Telefono."',Direccion='".$this->Direccion."',Nombre_electrodomestico='".$this->Nombre_electrodomestico."',Precio_unitario='".$this->Precio_unitario."',Cantidad='".$this->Cantidad."',Precio_total='".$this->Precio_total."' WHERE Id_cotizacion_de_compra='".$this->Id_cotizacion_de_compra."'";
    		$stmt= $this->model->prepare($query);
    		$stmt->execute();
    		return true;
    	} catch (PDOException $e) {
    		return false;
    	}
    }
}

?>