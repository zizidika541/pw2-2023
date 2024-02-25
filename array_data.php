<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    .container {
      margin-top: 50px;
    }
    h1 {
      color: #343a40;
      text-align: center;
    }
    th, td {
      text-align: center;
    }
    .table {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .table-hover tbody tr:hover {
      background-color: #f2f2f2;
    }
  </style>
  <title>Array Tabel Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // Data array multidimensi
          $buah = array(
            array("id" => 1, "nama" => "Apel", "warna" => "Merah", "stok" => 10, "harga" => 5000, "deskripsi" => "Buah yang segar dan kaya akan serat."),
            array("id" => 2, "nama" => "Jeruk", "warna" => "Oranye", "stok" => 15, "harga" => 7000, "deskripsi" => "Buah yang kaya akan vitamin C."),
            array("id" => 3, "nama" => "Pisang", "warna" => "Kuning", "stok" => 20, "harga" => 4000, "deskripsi" => "Buah yang mengandung kalium tinggi."),
            array("id" => 4, "nama" => "Anggur", "warna" => "Ungu", "stok" => 8, "harga" => 10000, "deskripsi" => "Buah yang digunakan untuk membuat wine."),
          );

          // Menampilkan data array menjadi tabel
          foreach ($buah as $data) {
            echo "<tr>";
            echo "<td>" . $data['id'] . "</td>";
            echo "<td>" . $data['nama'] . "</td>";
            echo "<td>" . $data['warna'] . "</td>";
            echo "<td>" . $data['stok'] . "</td>";
            echo "<td>Rp " . number_format($data['harga'], 0, ',', '.') . "</td>";
            echo "<td>" . $data['deskripsi'] . "</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>