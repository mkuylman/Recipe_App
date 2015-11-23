<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recipe</title>
</head>
<body>
	<a href="/recipes">Back to recipes</a>
	<h2><?= $recipe["title"] ?></h2>
	<p><?= $recipe["content"] ?></p>
<?php if(empty($liked)) { ?>
		<a href="/recipes/like/<?= $recipe['id'] ?>"><button>Like</button></a>
<?php } else { ?>
		<a href="/recipes/unlike/<?= $liked['id'] ?>"><button>Unlike</button></a>
<?php } ?>
</body>
</html>
