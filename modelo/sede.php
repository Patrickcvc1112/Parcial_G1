<?php
	include_once('conexionSingleton.php');
	class sede extends FactoryModel
	{
		public function ejecutarConsulta($tipo,$consultaSQL)
		{
			
			$db = conexionSingleton::getInstancia();
            $mysqli = $db->getConnection();
			$resultado = mysqli_query($mysqli,$consultaSQL);
			switch($tipo)
			{
				case 'select':
								$numeroFilasEncontradas = mysqli_num_rows($resultado);
								if($numeroFilasEncontradas == 0)
									$fila = 0;
								else
								{
									for($i = 0; $i < $numeroFilasEncontradas; $i++)	
										$fila[$i] = mysqli_fetch_array($resultado);
								}
								return($fila);
				case 'update':
				case 'delete':
				case 'insert':	$numeroFilasAfectadas = mysqli_affected_rows();
								return($numeroFilasAfectadas);
			}									
													
		}	

        public function agregarSede($id_sede,$nombre,$localizacion,$responsable,$capacidad,$referencia)
        {
            $consulta = "INSERT INTO sede (id_sede,nombre,localización,responsable,capacidad,referencia) 
            VALUES ('$id_sede','$nombre','$localizacion','$responsable','$capacidad','$referencia')";
            return $this->ejecutarConsulta('insert',$consulta);
        }
	}
?>