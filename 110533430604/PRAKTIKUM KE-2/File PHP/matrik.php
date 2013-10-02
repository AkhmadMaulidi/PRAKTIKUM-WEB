<!DOCTYPE html>
<html>
	<head>
		<title>Program Matrik Tabel</title>
	</head>

	<body><center>
		<?php 
			echo '</br></br></br>';
			function matrik_tabel($baris,$kolom){
				echo "<table border='10'>"; 
 
				for($tr=1;$tr<=$baris;$tr++){ 
      				echo "<tr>"; 
        			for($td=1;$td<=$kolom;$td++){ 
               			echo "<td>".$tr." ,".$td."</td>"; 
        			} 
    				echo "</tr>"; 
				} 
				echo "</table>"; 
			}
			$bariss = 4; //jumlah baris yang akan dibuat
			$kolomm = 3; //jumlah kolom yang akan dibuat
			matrik_tabel($bariss,$kolomm);
		?>
	</center>
	</body>
</html>
