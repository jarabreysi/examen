<!doctype html>
<html>
	<body>
		<h1>Calculator!</h1>
		<div>
			<form action="calc/process" method="POST">
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<input name="a">
				<input name="b">
			<select name="action">
				<option value='add'>+</option>
				<option value='rest'>-</option>
				<option value='divive'>/</option>
				<option value='multiply'>x</option>
			</select>
			<button>Calc.</button>
			</form>

			@if( isset($result) )
				{{$result}}
			@endif

		</div>

	</body>
</html>
