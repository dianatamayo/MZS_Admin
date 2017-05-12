<section>
<div  class="container">
	<form id="contact" method="post" action="index.php?c=usuario&a=create" data-parsley-validate>
		<h2>Registrate</h2>
			<div class="input-field ">
					<i class="fa fa-user" aria-hidden="true"></i><input type="text" id="nombrer" class="form-control"  placeholder="Nombre Completo" name="data[]" required>

					<i class="fa fa-envelope" aria-hidden="true"></i><input type="email" id="email" class="form-control"  placeholder=" Correo electrónico " name="data[]" required>

					<i class="fa fa-unlock-alt" aria-hidden="true"></i><input  type="password" id="pass1r"  name="data[]" class="form-control" placeholder="Contraseña" required>
					<i class="fa fa-unlock" aria-hidden="true"></i><input  type="password" id="pass2r" name="data[]" class="form-control"  placeholder="Verificar Contraseña" required>
					<label for="verif"></label>
				</div>
				<div class="g-recaptcha" id="recapcha" data-sitekey="6LcrghkUAAAAAInKTj9B-5z16U6M_oUzZdhce_84"></div>
							<button type="submit" id="to-about-section" target="_self" class="btn btn-default">Registrarse</button>
				<select name="data[]">
												<?php foreach ($this->Umodel->readRol() as $row) { ?>
														<option  value="<?php echo $row['rol_codigo']; ?>"><?php echo $row["rol_nombre"]; ?></option>
												<?php } ?>
										</select>

		</div>
	</div>
</form>
</section>
