<!DOCTYPE html>
<html>
	<head>
		<title>Program Greeting</title>
	</head>

	<body>
	<center>
		<?	
			function greeting($time){
				if ($time >= 00 and $time < 10 ){   
   					$greet="Selamat Pagi";   
  				}else if ($time >= 10 and $time < 15 ){   
   					$greet="Selamat Siang";  
 				}else if ($time >= 15 and $time < 18 ){   
   					$greet="Selamat Sore";      
 				}else if ($time >= 18 and $time <= 24 ){   
   					$greet="Selamat Malam";     
 				}else {   
  					$greet="Error";  
	 			}  
 				return $greet; 
			}	
			date_default_timezone_set('Asia/Jakarta');
			$waktu = date("H");
			echo '<h1>' .greeting($waktu). '</h1';
			echo '</br><h4>Sekarang Jam ' .$waktu.'</h4>';
		?>
	</center>
	</body>
</html>
