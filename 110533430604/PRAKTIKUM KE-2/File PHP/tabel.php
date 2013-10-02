<!DOCTYPE html>
<html>
	<head>
		<title>Tabel Fleksibel</title>
	</head>

	<body><center>
		<?php 
				echo '</br></br></br></br>';
				function tabell($sell,$bariss){
				$columns=3;
				$width = 300;
				echo '<h2>Generate Tabel Fleksibel ' .$sell.' sel dan ' .$columns.' kolom</h2><br />';
				echo "<table width=".$width." border=1>";
				$rw = 0;
				$cel = 1;
				while ($rw < $bariss && $cel <= $sell){
					echo "<tr>";
					$cl = 0;
					while ($cl < $columns){
						if ($cel <= $sell){
							echo "<td><div align=center>".$cel."</div></td>";
							$cel++;
						}
						$cl++;
					}
					echo "</tr>";
					$rw++;
				}
				echo "</table>";
			}
			tabell(12,4);



				echo '</br></br></br></br>';
				function tabel($sel,$baris){
				$columns=4;
				$width = 300;
				echo '<h2>Generate Tabel Fleksibel ' .$sel.' sel dan ' .$columns.' kolom</h2><br />';
				echo "<table width=".$width." border=1>";
				$rw = 0;
				$cel = 1;
				while ($rw < $baris && $cel <= $sel){
					echo "<tr>";
					$cl = 0;
					while ($cl < $columns){
						if ($cel <= $sel){
							echo "<td><div align=center>".$cel."</div></td>";
							$cel++;
						}
						$cl++;
					}
					echo "</tr>";
					$rw++;
				}
				echo "</table>";
			}
			tabel(10,4);
		?>
	</center></body>
</html>
