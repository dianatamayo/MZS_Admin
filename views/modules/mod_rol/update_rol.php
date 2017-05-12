<?php $rol = $this->Rmodel->readRolByCode($field) ?>
<div class="container">
    <form class="rol" action="?c=rol&a=updateData" method="post" data-parsley-validate>
        <h1 class="center">MODIFICAR ROL</h1>
        <div class="row">
            <div class="input-field col-xs-12">
              <label for="icon_prefix">Nombre</label>
                <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $rol['rol_nombre']; ?>" >
            </div>
          </div>
            <div class="row">
            <div class="input-field col-xs-12">
              <label for="icon_prefix">Descripcion</label>
                <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $rol['rol_descripcion']; ?>">
            </div>
        </div>
            <div class="row">
            <div class="input-field col-xs-12">
              <label for="icon_prefix">Fecha de creacion</label>
              <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $rol['rol_fech_creacion']; ?>">
            </div>
`          </div>
            <input type="hidden" readonly value="<?php echo $rol['rol_codigo']; ?>" name="data[]">

            <div class="row">
              <div class="input-field col-xs-12">
                <a class="btn btn-default" href="?c=rol" role="button">Atras </a>
                <button class="btn btn-default" type="submit" name="action">Actualizar</button>
              </div>
            </div>
    </form>
</div>
