<?php
	include_once('conexionSingleton.php');
	class combate extends FactoryModel
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

        public function listarCombates()
        {
            $consulta = "SELECT * FROM ucombate";
            $resultado = $this->ejecutarConsulta('select',$consulta);
            return $resultado;
        }

        public function agregarCombate($id_combate,$sede,$categoria,$nombre_pais1,$nombre_pais2,$fecha)
        {
            $consulta = "INSERT INTO combate (id_combate,sede,categoria,nombre_pais1,nombre_pais2,fecha) 
            VALUES ('$id_combate','$sede','$categoria','$nombre_pais1','$nombre_pais2','$fecha')";
            return $this->ejecutarConsulta('insert',$consulta);
        }
	}
?>