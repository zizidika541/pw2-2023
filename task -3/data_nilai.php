<div class="container">
    <h2>Data Mahasiswa</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Mata Kuliah</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Rerata</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Import file libfungsi.php
            require_once 'libfungsi.php';
            // Tangkap dan proses data dari form_nilai.php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Periksa apakah semua field telah diisi
                if (
                    isset($_POST['nama_lengkap']) && isset($_POST['matkul'])
                    && isset($_POST['nilai_uts']) && isset($_POST['nilai_uas'])
                    && isset($_POST['nilai_tugas'])
                ) {
                    // Tangkap data dari form
                    $nama_lengkap = $_POST['nama_lengkap'];
                    $matkul = $_POST['matkul'];
                    $nilai_uts = $_POST['nilai_uts'];
                    $nilai_uas = $_POST['nilai_uas'];
                    $nilai_tugas = $_POST['nilai_tugas'];

                    // Tampilkan data
                    echo "<tr>";
                    echo "<td>1</td>";
                    echo "<td>" . $nama_lengkap . "</td>";
                    echo "<td>" . $matkul . "</td>";
                    echo "<td>" . $nilai_uts . "</td>";
                    echo "<td>" . $nilai_uas . "</td>";
                    echo "<td>" . $nilai_tugas . "</td>";
                    // Hitung rerata, grade, predikat, dan keterangan menggunakan fungsi-fungsi yang ada di libfungsi.php
                    $rerata = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
                    $grade = grade($rerata);
                    $predikat = predikat($grade);
                    $keterangan = kelulusan($lulus);
                    echo "<td>" . number_format($rerata, 2) . "</td>";
                    echo "<td>" . $grade . "</td>";
                    echo "<td>" . $predikat . "</td>";
                    echo "<td>" . $keterangan . "</td>";
                    echo "</tr>";
                } else {
                    // Jika ada field yang kosong, tampilkan pesan kesalahan
                    echo "<tr><td colspan='10'>Data belum lengkap. Silakan lengkapi semua field pada form nilai.</td></tr>";
                }
            } else {
                // Jika form belum disubmit, tampilkan pesan default
                echo "<tr><td colspan='10'>Belum ada data untuk ditampilkan.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>