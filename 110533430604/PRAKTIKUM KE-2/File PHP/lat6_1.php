<!DOCTYPE html>
<html>
	<head>
		<title>DEMO PHP_HTML</title>
	</head>
	<body>
		<?php 
			function do_print(){
			echo time();}
			echo "AKU MAULID";
			echo '</br>';
			do_print();
			
			echo '</br>';
			
			function jumlah ($a, $b){
				return ($a + $b);
			}
			
			echo jumlah (2,3);
		?>
	<body>
</html>