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
if (isset($_GET['no'])) {
    $no = $_GET['no'];

    // Query untuk menghapus data berdasarkan "no"
    $sql = "DELETE FROM mahasiswa WHERE no=$no";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }
} else {
    echo "ID tidak ditemukan!";
}

// Tutup koneksi
$conn->close();
?>
