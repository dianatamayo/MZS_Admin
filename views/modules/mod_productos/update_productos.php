<?php $productos = $this->Pmodel->readProductosByCode($field) ?>
<div class="container">
    <form class="productos" action="?c=productos&a=updateData" method="post" data-parsley-validate>
        <h1 class="center">MODIFICAR PRODUCTOS</h1>
        <div class="row">
            <div class="input-field col-xs-12">
              <label for="icon_prefix">Nombre</label>
                <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $productos['produ_nombre']; ?>" >
            </div>
          </div>
            <div class="row">
              <div class="input-field col-xs-12">
                <label for="icon_prefix">imagen</label>
                <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $productos['produ_descripcion']; ?>">
              </div>
            </div>
            <input type="hidden" readonly value="<?php echo $productos['produ_codigo']; ?>" name="data[]">

        <div class="row">
          <div class="input-field col-xs-12">
            <a class="btn btn-default" href="?c=productos" role="button">Atras </a>
            <button class="btn btn-default" type="submit" name="action">Actualizar</button>
          </div>
        </div>
    </form>
</div>
