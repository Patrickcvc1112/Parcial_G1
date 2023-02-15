<?php
	class Footer
	{
		private static $instancia = null;

		private function __construct()
		{
			?>
			<p>&nbsp;</p>
				<footer>
					<table width="600" border="0" align="center">
                    <!--
					<tr>
						<td><img src="./img/fisi.jpg" width="600" height="150"></td>
					</tr>-->
					<tr>
						<td>
						<marquee>DESARROLLO WEB - GRUPO 1</marquee>
						</td>
					</tr>
					</table>
				</footer>            	
			  <p>&nbsp;</p>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
              </body>
            </html>			
			<?php
		}		
		public static function getFooter()
		{
			if(self::$instancia == null)
				self::$instancia = new self();
			return(self::$instancia);	
		}		
	}
?>