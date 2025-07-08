<?php
include "koneksi.php";

$query = "DELETE FROM data_mhs WHERE nim='0200022'";
mysqli_query($conn, $query);
echo "<h3>Data berhasil dihapus </h3>";

$query = "UPDATE data_mhs SET nim = '01'"
?>