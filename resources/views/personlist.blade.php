<!doctype html>
<html>
	<body>
		<h1>Person List! <a href="form">New Users</a> </h1>
		<div>
			<ul>
			@foreach($list as $item)
				<li>{{$item->name}} {{$item->phone}}</li>
			@endforeach
			</ul>
		</div>

	</body>
</html>
