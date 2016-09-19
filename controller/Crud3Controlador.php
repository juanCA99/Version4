<?php 

/**
* 
*/
require_once'model/Crud3.php';
class Crud3Controlador
{
	private $model;

	public function __construct() {
		$this->model= new Crud3();
	}

	public function Index()
	{
		$cotizaciones = $this->model;
		$stmt= $cotizaciones->listar();

		require_once'views/header.html';
		require_once'views/administrador/Crud3/index.php';
		require_once'views/footer.html';
	}
	public function Otro()
	{
		require_once'views/header.html';
		require_once'views/administrador/Crud3/otro.php';
		require_once'views/footer.html';
	}
	public function Hola()
	{
		require_once'views/header.html';
		require_once'views/administrador/Crud3/nueva.php';
		require_once'views/footer.html';
	}
	public function ReporteWord()
	{
		require_once'views/header.html';
		require_once'views/administrador/Reporte-Word.php';
		require_once'views/footer.html';
	}
	public function ReporteExcel()
	{
		require_once'views/header.html';
		require_once'views/administrador/Reporte-Excel.php';
		require_once'views/footer.html';
	}
	public function ReporteTxt()
	{
		require_once'views/header.html';
		require_once'views/administrador/Reporte-Txt.php';
		require_once'views/footer.html';
	}
	public function ReportePdf()
	{
		require_once'views/header.html';
		require_once'views/administrador/Reporte-Pdf.php';
		require_once'views/footer.html';
	}
	



	public function Crud3()
	{
		$cotizaciones = $this->model;
		$stmt= $cotizaciones->listar();

		require_once'views/header.html';
		require_once'views/administrador/crud3/registrocotizaciones.php';
		require_once'views/footer.html';
	}
	public function CRUD()
	{
		$cotizaciones = $this->model;

		if (isset($_REQUEST['Id_cotizacion_de_compra'])) {
			$cotizaciones->setId_cotizacion_de_compra($_REQUEST['Id_cotizacion_de_compra']);
			$stmt= $cotizaciones->consultaId_cotizacion_de_compra($cotizaciones);
			if ($stmt) {
				require_once'views/header.html';
				require_once'views/administrador/Crud3/editar.php';
				require_once'views/footer.html';
				//editar
			}
			else
			{
		
				$cotizaciones->setId_cotizacion_de_compra($_REQUEST['Id_cotizacion_de_compra']);
				$cotizaciones->setNombre_usuario($_REQUEST['Nombre_usuario']);
				$cotizaciones->setTelefono($_REQUEST['Telefono']);
				$cotizaciones->setDireccion($_REQUEST['Direccion']);
				$cotizaciones->setNombre_electrodomestico($_REQUEST['Nombre_electrodomestico']);
				$cotizaciones->setPrecio_unitario($_REQUEST['Precio_unitario']);
				$cotizaciones->setCantidad($_REQUEST['Cantidad']);
				$cotizaciones->setPrecio_total($_REQUEST['Precio_total']);
				$stmt= $cotizaciones->insertar($cotizaciones);
				header("location:?controller=Crud3");
			}
		}
		
	}
	public function Eliminar() {

		$cotizaciones= $this->model;

		$cotizaciones->setId_cotizacion_de_compra($_REQUEST['Id_cotizacion_De_compra']);

		$stmt= $cotizaciones->Eliminar($cotizaciones);
		header("location:?controller=Crud3");
	}

	public function editar(){
		$cotizaciones = $this->model;
		$cotizaciones->setId_cotizacion_de_compra($_REQUEST['Id_cotizacion_de_compra']);
		$cotizaciones->setNombre_usuario($_REQUEST['Nombre_usuario']);
		$cotizaciones->setTelefono($_REQUEST['Telefono']);
		$cotizaciones->setDireccion($_REQUEST['Direccion']);
		$cotizaciones->setNombre_electrodomestico($_REQUEST['Nombre_electrodomestico']);
		$cotizaciones->setPrecio_unitario($_REQUEST['Precio_unitario']);
		$cotizaciones->setCantidad($_REQUEST['Cantidad']);
		$cotizaciones->setPrecio_total($_REQUEST['Precio_total']);
		$stmt= $cotizaciones->editar();
		if ($stmt==true) {
			header("location:?controller=Crud3");
		}




		


	}}

