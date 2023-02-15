<?php
    include_once("../shared/Header.php");
    Header::getHeader(); 
?>
    <div class = "container-fluid row">
        <form class="col-4 p-3 m-auto" method="POST">
            
            <h3 class="text-center alert alert-secondary"><i class="bi bi-person-circle"></i>  Registro de sedes</h3>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Documento de identidad (DNI)</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido paterno</label>
                <input type="text" class="form-control" name="apaterno">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido materno</label>
                <input type="text" class="form-control" name="amaterno">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono">
            </div>
            
            <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok"><i class="bi bi-save2-fill"></i> Registrar</button>
        </form>
    </div>

<?php
    include_once("../shared/Footer.php");
    Footer::getFooter(); 
?>
