<?php $pagina = $this->Pmodel->readPaginaByCode($field) ?>
<div class="container">
    <form class="pagina" action="?c=pagina&a=updateData" method="post" data-parsley-validate>
        <h1 class="center">MODIFICAR PAGINA</h1>
        <div class="row">
            <div class="input-field colxs-12 ">
                <i class="material-icons prefix"></i>
                <label for="icon_prefix">Nombre</label>
                <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $pagina['pag_nombre']; ?>">
            </div>
          </div>
            <div class="row">
              <div class="input-field colxs-12 ">
                <label for="icon_prefix">menu</label>
                <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $pagina['pag_menu']; ?>">
              </div>
            </div>
            <div class="row">
              <div class="input-field colxs-12 ">
                <label for="icon_prefix">ICONO</label>
                <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $pagina['pag_icono']; ?>">
              </div>
            </div>
            <div class="row">
              <div class="input-field colxs-12 ">
                <label for="icon_prefix">seccion</label>
                <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $pagina['pag_seccion']; ?>">
              </div>
            </div>
            <input type="hidden" readonly value="<?php echo $pagina['pag_codigo']; ?>" name="data[]">

        <div class="row">
          <div class="input-field colxs-12">
            <a class="btn btn-default" href="?c=restaurante" role="button">Atras </a>
            <button class="btn btn-default" type="submit" name="action">Actualizar</button>
          </div>
        </div>
    </form>
</div>
