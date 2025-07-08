<?php
include "koneksi.php";
$query = "SELECT * FROM data_mhs";
$results = mysqli_query($conn, $query);
while ($res = mysqli_fetch_row($results)){
	echo "$res[0] $res[1] $res[2] $res[3]";
   echo "<br/>";
}
while ($row = mysql_fetch_assoc($results)){
	echo $row["nama"]." ".$row["nim"]." "$row["angkatan"];
}
?>