<?php $usuario = $this->Umodel->readUsuarioByCode($field) ?>
<div class="container">
    <form class="suario" action="?c=usuario&a=updateData" method="post" data-parsley-validate>
        <center><h1>MODIFICAR USUARIO</h1></center>
        <div class="row">
            <div class="input-field col-xs-12 ">
              <label for="icon_prefix">Nombre Completo</label>
              <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $usuario['usu_nombre_comp']; ?>"  required>
              </div>
          </div>
            <div class="row">
              <div class="input-field col-xs-12 ">
                <label for="icon_prefix">Fecha De Nacimiento</label>
                <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $usuario['usu_fech_naci']; ?>" required>
              </div>
            </div>
              <div class="row">
              <div class="input-field col-md-12  ">
                <label for="icon_prefix">Sexo</label>
                <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $usuario['usu_sexo']; ?>" required>
              </div>
            </div>

                <div class="row">
                  <div class="input-field col-xs-12  col ">
                    <label for="icon_prefix">Telefono</label>
                    <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $usuario['usu_tel_cel']; ?>" required>
                </div>
              </div>
              <div class="row">
                  <div class="input-field col-xs-12 ">
                    <label for="icon_prefix">E-mail</label>
                    <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $usuario['usu_mail']; ?>">
                </div>
              </div>
                <div class="row">
                <div class="input-field col-xs-8 ">
                  <label for="icon_prefix">Rol Codigo</label>
                  <input id="icon_prefix" type="text" class="form-control" name="data[]" value="<?php echo $usuario['rol_codigo']; ?>" required>
                </div>
              </div>
            <input type="hidden" readonly value="<?php echo $usuario['usu_codigo']; ?>" name="data[]">
            <div class="row">
              <div class=" input-field col-xs-8">
                <a class="btn btn-default" href="?c=usuario" role="button">Atras </a>
                <button class="btn btn-default" type="submit" name="action">Actualizar</button>
              </div>
            </div>
    </form>
  </div>
