<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contoh Form</title>
</head>
<body>
<h3>kalkulator penjumlahan sederhana</h3>
<form action="" method="POST">
	<label>Bilangan pertama=</label><br>
	<input type="number" name="bil1"><br>
	<label>Bilangan kedua=</label><br>
	<input type="number" name="bil2"><br>
	<input type="submit" value="Add" name="Add">
</form>
<?php
if (isset($_POST['bil1'])){
	$bil1 = $_POST['bil1'];
	$bil2 = $_POST['bil2'];
	$value = $bil1 + $bil2;
	echo "<h3> hasil penjumlahan adalah = ".$value."</h3>";
}

?>
</body>
</html>