<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_mahasiswa";

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil parameter "no" dari URL
$no = $_GET['no'];

// Query untuk mendapatkan data mahasiswa berdasarkan "no"
$sql = "SELECT * FROM mahasiswa WHERE no=$no";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Cek apakah data ditemukan
if (!$row) {
    die("Data tidak ditemukan!");
}

// Proses update data jika form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $gender = $_POST["gender"];
    $jurusan = $_POST["jurusan"];

    // Query untuk update data
    $sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', gender='$gender', jurusan='$jurusan' WHERE no=$no";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect ke halaman utama
        exit();
    } else {
        echo "Gagal mengupdate data: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form method="post">
        <label>NIM:</label>
        <input type="text" name="nim" value="<?= $row['nim'] ?>" required><br><br>

        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br><br>

        <label>Gender:</label>
        <select name="gender">
            <option value="Laki-laki" <?= $row['gender'] == "Laki-laki" ? "selected" : "" ?>>Laki-laki</option>
            <option value="Perempuan" <?= $row['gender'] == "Perempuan" ? "selected" : "" ?>>Perempuan</option>
        </select><br><br>

        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="<?= $row['jurusan'] ?>" required><br><br>

        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
