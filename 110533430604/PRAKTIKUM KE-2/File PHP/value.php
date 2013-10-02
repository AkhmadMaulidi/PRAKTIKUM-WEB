<!DOCTYPE html>
<html>
	<head>
		<title>Passing By Value</title>
	</head>

	<body>
		<?php 
			function jumlah($a) {
				$a++;
			}
			$x=5;
			jumlah($x);
			echo $x;
		?>
	</body>
</html>
