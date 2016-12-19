<!DOCTYPE html>
<html>
<head>
	<title>Difference Expansion</title>
</head>
<body>
	<form method="POST"  enctype="multipart/form-data" action={{ url('/encode/embed') }}>
		{{ csrf_field() }}
		<input type="file" name="cover_image" accept="image/*">

		<input type="submit">
	</form>
</body>
</html>