<?php
$full = (isset($_SERVER["HTTPS"]) ? "https://" : "http://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$bil1 = $_GET['bil1'];
$bil2 = $_GET['bil2'];
$value = $bil1 + $bil2;
echo "<h3> hasil penjumlahan adalah = ".$value."</h3>";
?>