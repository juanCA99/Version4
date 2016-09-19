<?php 
session_start();
if ($_SESSION['doc_administrador']=="" || $_SESSION['doc_administrador']==null) {
	header("location:index.php");
}



 ?>

 <button class="btn btn-info"><span class="glyphicon glyphicon-log-out"></span> <a href="?controller=login&accion=salir">CERRAR SESION</a></button>
<center> 

</center>


<center>	

<div  class="navbar navbar-default" >

	<div  class="container">
	
		 <div class="navbar-header">

		
		
		<ol class="nav navbar-nav">
			
			
			<li><a href="?controller=administrador&accion=Crud1"><span class="glyphicon glyphicon-user"></span> Registro Usuarios </a></li>
			<li><a href="?controller=Crud2&accion=Crud2"><span class="glyphicon glyphicon-print"></span> Registro Productos </a></li>
			<li><a href="?controller=Crud3&accion=Crud3"><span class="glyphicon glyphicon-qrcode"></span> Cotizaciones </a></li>
			<li><a href="?controller=administrador&accion=SubirArchivos"><span class="glyphicon glyphicon-level-up"></span> Subir archivos </a></li>
			<li><a href="?controller=administrador&accion=MostrarArchivos"><span class="glyphicon glyphicon-duplicate"></span> Listado Productos  </a></li>
			<li class="dropdown">
				<a href="" class="dropdown-toggle" data-toggle="dropdown">Reportes<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<li><a href="?controller=administrador&accion=ReporteWord"><img src="views/login/word.png" width="25" height="25">Reporte Word</a></li>
					<li><a href="?controller=administrador&accion=ReporteExcel"><img src="views/login/excel.png" width="25" height="25">Reporte Excel</a></li>
					<li><a href="?controller=administrador&accion=ReportePdf"><img src="views/login/txt.jpg" width="25" height="25">Reporte Txt</a></li>
					<li><a href="?controller=administrador&accion=ReportePdf"><img src="views/login/pdf.png" width="25" height="25">Reporte Pdf</a></li>
					
					
				</ul>
			</li>
			
			</center>
	
		</ol>
	
	</div>

	
</div>






<br>

<body background="views/login/electrodomesticos.jpg">
<br>
<center><h1><font color="white">EDITAR COTIZACIONES</h1></center>

<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-danger">
		
				<div class="panel-heading">EDITAR COTIZACIONES
				</div>
				<div class="panel-body">
					<form method="post" action="?controller=Crud3&accion=editar">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
							<input type="text" name="Id_cotizacion_de_compra" class="form-control" value=<?php echo $stmt['Id_cotizacion_de_compra'];?> >
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="Nombre_usuario" class="form-control" value=<?php echo $stmt['Nombre_usuario'] ?> >
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="Telefono" class="form-control" value=<?php echo $stmt['Telefono'] ?> >
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-send"></span></span>
							<input type="text" name="Direccion" class="form-control" value=<?php echo $stmt['Direccion'] ?> >
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-send"></span></span>
							<input type="text" name="Nombre_electrodomestico" class="form-control" value=<?php echo $stmt['Nombre_electrodomestico'] ?> >
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-send"></span></span>
							<input type="text" name="Precio_unitario" class="form-control" value=<?php echo $stmt['Precio_unitario'] ?> >
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-send"></span></span>
							<input type="text" name="Cantidad" class="form-control" value=<?php echo $stmt['Cantidad'] ?> >
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-send"></span></span>
							<input type="text" name="Precio_total" class="form-control" value=<?php echo $stmt['Precio_total'] ?> >
						</div>
						<hr>
						<button class="btn btn-danger btn-block">Actualizar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
