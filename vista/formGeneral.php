<?php    
	class ListaOpciones
    {
		public function formListaGeneralShow(){     
                 
            include_once("./shared/Header.php");
            Header::getHeader(); 
            //$objetoModelo = FactoryModel::crearModelo('sede');
            ?>
            <td>
                <br><br>
                <div style="text-align: center;">
                    <a href="./vista/formRegistrarSedes.php" class="btn btn-primary btn-lg p-3"><i class="bi bi-geo-alt"></i> Registrar Sedes</a>
                </div>
                <br><br>
                <div style="text-align: center;">
                    <a href=" " class="btn btn-primary btn-lg p-3"><i class="bi bi-people-fill"></i>  Registrar Delegaciones</a>
                </div>
                <br><br>
                <div style="text-align: center;">
                    <a href=" " class="btn btn-primary btn-l p-3"><i class="bi bi-diagram-3"></i> Registrar Combates</a>
                </div>
                <br><br>
                <div style="text-align: center;">
                    <a href=" " class="btn btn-primary btn-lg p-3"><i class="bi bi-calendar2-event"></i> Mostrar combates registrados</a>
                </div>
                <br><br>
            </td>

            <?php
                    
            include_once("./shared/Footer.php");
            Footer::getFooter();          
		}
	}
?>