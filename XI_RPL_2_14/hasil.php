<html>
<head>
<meta charset="UTF-8">
<title>Sukses !!</title>
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div id="content">
<div class="judul"><p align="center"><font size="5px"><b>BERHASIL !!</b></p></font></div>
<hr>
<div class="penerang">Selamat, Anda telah terdaftar dalam Instagram dengan biodata berikut</p></div>
<div class="table"><table>
<tr><td>Nomor Ponsel atau Email</td> <td>:</td> <td><?php echo $_POST["nomor"];?></td></tr>
<tr><td>Nama Lengkap</td> <td>:</td> <td><?php echo $_POST["lengkap"];?></td></tr>
<tr><td>Nama Pengguna</td> <td>:</td> <td><?php echo $_POST["pengguna"];?></td></tr>
<tr><td>Kata Sandi</td> <td>:</td> <td><?php echo $_POST["sandi"];?></td></tr>
</table></p></div>
<hr>
<div class="button">
<p align="center"><button class="btn" type="submit"><a href="form.php"><b>Ulang</b></a></button></p>
</div>
</div>
</body>
</html>
<!--Faiz Hermawan->
