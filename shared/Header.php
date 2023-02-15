<?php
	class Header
	{
		private static $instancia=null;	
		
		private function __construct()
		{
			?>
			<html>
				<head>
                    <p>&nbsp;</p>
					<title>Examen Parcial</title>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
                </head>
				<body>
					<header>
                        <h1 class="text-center"><i class="bi bi-laptop"></i>   EXAMEN PARCIAL - GRUPO 1</h1>

                        <!--
						<table align="center" border="0" width="600">
						<tr>
							<td><img src="./img/head.jpg" width="600" height="200"></td>
						</tr>
						</table>-->
					</header>	
			<?php		 
		 
		}
		
		public static function getHeader()
		{
			if(self::$instancia==null){
				self::$instancia = new self();
			}					
			return(self::$instancia);		
		}
		
	}

?>