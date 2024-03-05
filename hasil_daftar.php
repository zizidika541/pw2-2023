<!-- hasil_daftar.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Memuat Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<?php
				/* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */
				  if ($_SERVER["REQUEST_METHOD"] == "POST") {
				    // Memeriksa apakah data sudah diisi dan tidak kosong
				    if (empty($_POST["nama_lengkap"]) || empty($_POST["email"]) || empty($_POST["alamat"]) || empty($_POST["telepon"])) {
				        echo "<tr><td colspan='5'>Semua kolom harus diisi.</td></tr>";
				    } else {
				        // Menampilkan data dari form
				        echo "<tr>";
				        echo "<td>1</td>";
				        echo "<td>" . $_POST["nama_lengkap"] . "</td>";
				        echo "<td>" . $_POST["email"] . "</td>";
				        echo "<td>" . $_POST["alamat"] . "</td>";
				        echo "<td>" . $_POST["telepon"] . "</td>";
				        echo "</tr>";
				    }
				  }
				?>
			</tbody>
		</table>
	</div>
</body>
</html>