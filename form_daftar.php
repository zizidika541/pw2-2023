<!-- form_daftar.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Memuat Bootstrap CSS dari CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
		<h1>Form Pendaftaran</h1>
		<form method="POST" action="hasil_daftar.php">
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" id="alamat" name="alamat"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input type="tel" class="form-control" id="telepon" name="telepon">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>