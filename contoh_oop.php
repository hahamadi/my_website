<html>
<head>
    <title>Halaman PHP fungsi</title> 
</head>
<body>
    <h1>Script fungsi dalam PHP</h1>
    <?php
    	class manusia{
    		public $nama;
    		public $umur;
    		public function sapa(){
    			echo "Halo, nama saya $this->nama, umur saya $this->umur tahun.";
    		}
    	}

    	$john = new manusia();
    	$john->nama = "Albert Einstein";
    	$john->umur = 25;
    	$john->sapa();
		
	?>
    </body>
</html>