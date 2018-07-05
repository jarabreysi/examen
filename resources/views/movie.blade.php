<!doctype html>
<html>
	<body>
		<h1>Movie </h1>
		<div>
			<form action="movie/process" method="POST">
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<input name="pelicula" placeholder="Nombre Pelicula"> 
				<button>Buscar movie
			</form>
		</div>
	</body>
</html>