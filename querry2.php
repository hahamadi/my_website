<?php
include "koneksi.php";

$data = array(["dani","0100010","2010"],
				["farah","0100023","2023"]);
foreach ($data as $dt) {
	$query = "INSERT INTO data_mhs (nama, nim, angkatan) VALUES ('".$dt[0]."', '".$dt[1]."', '".$dt[2]."')";
	mysqli_query($conn, $query);	
}
echo "<h3>Data berhasil ditambahkan ke database </h3>"
?>