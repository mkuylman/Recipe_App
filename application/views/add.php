<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add a Recipe</title>
</head>
<body>
	<h4>Add a Recipe!</h4>
	<form action="/recipes/create" method="post">
		<input type="text" name="title">
		<textarea name="content"></textarea>
		<input type="submit" value="Add">
	</form>
</body>
</html>