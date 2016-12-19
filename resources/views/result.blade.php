<!DOCTYPE html>
<html>
<head>
	<title>Results Difference Expansion</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	<div class="container-fluid">

	<h3>Process:</h3>
	<ul>
		<li>Rata-rata: {{ $mean }}</li>
		<li>Selisih: {{ $diff }}</li>
		<li>Selisih Aksen: {{ $diff_deriv }}</li>
		<li>X Aksen: {{ $x_deriv }}</li>
		<li>Y Aksen: {{ $y_deriv }}</li>
	</ul>

		<table class="table">
			<thead>
				<tr>
					<td>Pixel width</td>
					<td>Pixel height</td>
					<td>Type</td>
					<td>Dimension</td>
					<td>Bits</td>
					<td>Channels</td>
					<td>mime</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					@foreach($image_properties as $img_prop)
					<td>{{ $img_prop }}</td>
					@endforeach
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>