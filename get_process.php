<?php
if (isset($_GET['submit'])){
	$nama = $_GET['nama'];
	$nim = $_GET['nim'];
	$angkatan = $_GET['angkatan'];
	echo "<h3> Nama = ".$nama.", nim = ".$nim.", angkatan = ".$angkatan." Menggunakan GET</h3>";
}
?>