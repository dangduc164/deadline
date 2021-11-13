<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<header></header>
		<main>
			<form action="<?= $_SEVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
			<h3>Select a file to upload</h3>
			<input type="file" name="image"><br>
			<input type="submit" name="upload">
			</form>
		</main>
		<footer></footer>
	</div>

</body>
</html>