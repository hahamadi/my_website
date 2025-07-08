<html>
<head>
    <title>Halaman PHP fungsi</title> 
</head>
<body>
    <h1>Script fungsi dalam PHP</h1>
    <?php
		function jumlah($a,$b){
			$c = $a + $b;
			return $c;
		}

		$total = jumlah(10, 20);
		echo "hasil total penjumlah $total";
	?>
    </body>
</html>
