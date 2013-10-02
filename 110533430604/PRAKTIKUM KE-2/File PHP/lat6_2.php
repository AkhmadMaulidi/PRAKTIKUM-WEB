<!DOCTYPE html>
<html>
	<head>
		<title>DEMO PHP_HTML</title>
	</head>
	<body>
		<?php 
			function print_teks ($teks, $bold = true){
				echo $bold ? '<b>' .$teks. '</b>' : $teks;
			}
			print_teks ('Indonesiaku');
			echo '</br>';
			print_teks ('Indonesiaku', false);
		?>
	<body>
</html>