<html>
<body>
<?php
for($i=0; $i<10; $i++){
	echo "<h3>Iterasi ke-".$i."</h3>";
}
$jk = 0;
while ($jk < 5){
	echo "<h3>iterasi menggunakan while ke-".$jk."</h3>";
	$jk++;
}
?>
<h3>Nama Buah</h3>
<ul>
<?php
$lst = array("jeruk", "pisang", "anggur");
foreach($lst as $ls){
	echo "<li>".$ls."</li>";
}
?>
</ul>
</body>
</html>