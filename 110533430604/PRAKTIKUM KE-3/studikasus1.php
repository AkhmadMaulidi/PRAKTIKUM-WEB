<html>
<head>
	<title>Studi Kasus: Preselecting pada Seleksi</title>
</head>
<body><center><div style="background:#123123; padding-top:50px; width:400px;height:400px">
	<h2>Daftar Nama Lengkap</h2>
	<strong>Nama panggilan:</strong><br>
	<em>Silakan pilih untuk menampilkan nama lengkap</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="nama">
			<option value="akhmad" 
			<?php if (isset($_POST['nama'])&&$_POST['nama']=='akhmad') {
				echo "selected";
			} ?>
			>Akhmad</option>
			<option value="wira" <?php if (isset($_POST['nama'])&&$_POST['nama']=='wira') {
				echo "selected";
			} ?>>Wira</option>
			<option value="novi" 
			<?php if (isset($_POST['nama'])&&$_POST['nama']=='novi') {
				echo "selected";
			} ?>
			>Novi</option>
			<option value="bilqis" 
			<?php if (isset($_POST['nama'])&&$_POST['nama']=='bilqis') {
				echo "selected";
			} ?>
			>Bilqis</option>
			<option value="susilo" 
			<?php if (isset($_POST['nama'])&&$_POST['nama']=='susilo') {
				echo "selected";
			} ?>
			>Susilo</option>
		</select>
		<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['nama'])) {
		switch ($_POST['nama']) {
			case 'akhmad':
				echo "<div id='nilai'>Nama lengkap : Akhmad Maulidi</div>";
				break;

			case 'wira':
				echo "<div id='nilai'>Nama lengkap : Sri Murti Wirandini</div>";
				break;

			case 'novi':
				echo "<div id='nilai'>Nama lengkap : Fatimah Novi Warkita</div>";
				break;

			case 'bilqis':
				echo "<div id='nilai'>Nama lengkap : Bilqis Ufaira</div>";
				break;

			case 'susilo':
				echo "<div id='nilai'>Nama Lengkap : Susilo Bambang Yudhoyono</div>";
				break;	
			default:
				# code...
				break;
		}
	}
	 ?>
</div>
</center></body>
</html>