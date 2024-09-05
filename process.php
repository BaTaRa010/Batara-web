<?php
$koneksi = mysqli_connect("localhost", "root", "", "data_calon");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari formulir dan bersihkan (escape)
$namaLengkap = mysqli_real_escape_string($koneksi, $_POST['namaLengkap']);
$umur = mysqli_real_escape_string($koneksi, $_POST['umur']);
$jenisKelamin = mysqli_real_escape_string($koneksi, $_POST['jenisKelamin']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$rt = mysqli_real_escape_string($koneksi, $_POST['rt']);
$rw = mysqli_real_escape_string($koneksi, $_POST['rw']);
$nomor = mysqli_real_escape_string($koneksi, $_POST['nomor']);
$submit = mysqli_real_escape_string($koneksi, $_POST['submit']);

// Mulai transaksi
mysqli_begin_transaction($koneksi);

// Periksa apakah nomor sudah ada
$cek_nomor = "SELECT * FROM Batara10 WHERE nomor = ?";
$stmt_cek = mysqli_prepare($koneksi, $cek_nomor);
mysqli_stmt_bind_param($stmt_cek, "s", $nomor);
mysqli_stmt_execute($stmt_cek);
$result = mysqli_stmt_get_result($stmt_cek);

if (mysqli_num_rows($result) > 0) {
    mysqli_rollback($koneksi);
    header("Location: false.php?error=nomor_sudah_ada");
} elseif (!is_numeric($nomor)) {
    mysqli_rollback($koneksi);
    header("Location: false.php?error=nomor_harus_angka");
} else {
    // Nomor belum ada dan valid, lanjutkan insert data
    $query = "INSERT INTO Batara10 (namaLengkap, umur, jenisKelamin, alamat, rt, rw, nomor, submit) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "sissssis", $namaLengkap, $umur, $jenisKelamin, $alamat, $rt, $rw, $nomor, $submit);

    if (!mysqli_stmt_execute($stmt)) {
        mysqli_rollback($koneksi);
        error_log("Gagal menyimpan data: " . mysqli_error($koneksi));
        header("Location: error.php");
    } else {
        mysqli_commit($koneksi);
        header("Location: success.php");
    }
}

// Tutup statement dan koneksi
mysqli_stmt_close($stmt);
mysqli_stmt_close($stmt_cek);
mysqli_close($koneksi);
?>