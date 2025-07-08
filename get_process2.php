<?php
include "koneksi.php";

if (isset($_GET['submit'])){
	$nama = $_GET['nama'];
	$nim = $_GET['nim'];
	$angkatan = $_GET['angkatan'];
	$query = "INSERT INTO data_mhs (nama, nim, angkatan) VALUES ('".$nama."', '".$nim."', '".$angkatan."')";
	mysqli_query($conn, $query);
	echo "<h3> Success add Nama = ".$nama.", nim = ".$nim.", angkatan = ".$angkatan."into database </h3>";
}
?>