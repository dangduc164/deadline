<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>index.php</title>
</head>
<body>
	<header></header>
	<main>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" accept-charset="utf-8">
			Nhập số:
			<br>
			<input type="text" name="Number" value="" placeholder="Dien so...">
			<br>
			<input type="submit" name="submit" value="Gui">
		</form>
	</main>
	<footer></footer>
</body>
</html>



<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
		$number = $_POST['Number'];
		$i=1;
		do{
				echo $i;
				echo "<br>";
					$i++;
		}while($i<=$number);
		// for ($i=1; $i <= $number; $i++) { 
		// 	echo $i;
		// 	echo '<br>';
		// }
}


?>