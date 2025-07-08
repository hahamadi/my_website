<html>
	<body>
		<?php
			$total = 15;

			if($total > 10){
				echo "Total diatas 10 <br>";
			}else {
				echo "Total dibawah sama dengan 10 <br>";
			}

			if ($total>10){
				$grade = "A+ <br>";
			}elseif ( $total > 8){
				$grade = "A <br>";
			}elseif ($total > 5){
				$grade = "B <br>";
			}else {
				$grade = "C <br>";
			}
			echo $grade;

			$level = 4;
			switch($level){
				case 1:
					echo "Pelajari HTML <br>";
					break;
				case 2:
					echo "Pelajari CSS <br>";
					break;
				case 3:
					echo "Pelajari Javascript <br>";
					break;
				case 4:
					echo "Pelajari PHP <br>";
					break;
				default:
					echo "Kamu bukan programmer! <br>";
				}
		?>
	</body>
</html>
