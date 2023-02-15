<?php
	include_once('sedes.php');
	include_once('delegaciones.php');	
	include_once('combates.php');
	class FactoryModel
	{
		public static function crearModelo($tipo)
		{
			switch($tipo)
			{
				case 'sede': return new sede();
				case 'delegacion': return new delegacion();
				case 'combate': return new combate();
				default: return new Exception("Error en la capa modelo");	
			}
		}
	}
?>