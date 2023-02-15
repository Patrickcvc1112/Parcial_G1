<?php
	include_once('conexionSingleton.php');
	class delegacion extends FactoryModel
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
        public function agregarDelegacion($nombre_pais,$entrenador,$representante_gobierno,$medico,$masajista,$per_amarillo,$per_naranja,$per_verde,$per_marron,$per_negro)
        {
            $consulta = "INSERT INTO delegacion (nombre_pais,entrenador,representante_gobierno,medico,masajista,per_amarillo,per_naranja,per_verde,per_marrón,per_negro) 
            VALUES ('$nombre_pais','$entrenador','$representante_gobierno','$medico','$masajista','$per_amarillo','$per_naranja','$per_verde','$per_marron','$per_negro')";
            return $this->ejecutarConsulta('insert',$consulta);
        }
	}
?>