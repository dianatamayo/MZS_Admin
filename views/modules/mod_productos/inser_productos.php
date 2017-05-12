<form method="post" action="?c=productos&a=create"data-parsley-validate>
	<div class="container">
		  <h1>Registrar Productos</h1>
			<div class="form">
				<input type="text" class="form-control" id="img"  placeholder="Nombre del produucto" name="data[]" required>
				<textarea class="form-control" rows="3" placeholder="Descripcion" name="data[]" required></textarea>
			</div>
			<div class="center">
			<a class="btn btn-default" href="?c=productos" role="button">Atras </a>
			<button class="btn btn-default" type="submit">Guardar</button>


			</div>
	</div>
</form>
