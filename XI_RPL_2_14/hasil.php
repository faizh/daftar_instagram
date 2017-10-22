<html>
<head>
<meta charset="UTF-8">
<title>Sukses !!</title>
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="style2.css">
</head>
<body>
	<div id="content">
		<div class="judul"><p align="center"><font size="5px"><b>BERHASIL !!</b></p></font>
		</div>
		<hr>
		<div class="penerang">Selamat, Anda telah terdaftar dalam Instagram dengan biodata berikut</p>
		</div>
		<div class="table">
		<?php
		$conn=mysql_connect("localhost", "root", "");
		mysql_select_db("dbinstagram");
		$email=$_POST['email'];
		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$sandi=$_POST['sandi'];
		$sql="insert into tbdaftar (email, nama, username, sandi) values ('$email', '$nama', '$username', '$sandi')";
		mysql_query($sql);
		echo "<table>";
		echo "<tr><td>Nomor Ponsel atau Email</td> <td>:</td> <td>$email</td></tr>";
		echo "<tr><td>Nama Lengkap</td> <td>:</td> <td>$nama</td></tr>";
		echo "<tr><td>Nama Pengguna</td> <td>:</td> <td>$username</td></tr>";
		echo "<tr><td>Kata Sandi</td> <td>:</td> <td>$sandi</td></tr>";
		echo "</table>";
		?>
		</div>
		<hr>
		<div class="button">
		<p align="center"><button class="btn" type="submit"><a href="form.php"><b>Ulang</b></a></button></p>
		</div>
	</div>
</body>
</html>
<!--Faiz Hermawan->
