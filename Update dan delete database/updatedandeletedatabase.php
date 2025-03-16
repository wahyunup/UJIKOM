<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa</title>
</head>
<body>
    <?php
    // Konfigurasi database
    $host = "localhost";
    $user = "root"; // Ubah jika username database berbeda
    $password = ""; // Ubah jika ada password
    $database = "db_mahasiswa";

    // Membuat koneksi
    $conn = new mysqli($host, $user, $password, $database);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk mengambil data mahasiswa
    $sql = "SELECT * FROM mahasiswa";
    $result = $conn->query($sql);
    ?>

    <div>
        <h1>List Mahasiswa</h1>
        <table border="1">
            <tr>
              <th>No</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Gender</th>
              <th>Jurusan</th>
              <th>Action</th>
            </tr>

            <?php
            $no = 1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $no++ . "</td>
                            <td>" . $row["nim"] . "</td>
                            <td>" . $row["nama"] . "</td>
                            <td>" . $row["gender"] . "</td>
                            <td>" . $row["jurusan"] . "</td>
                            <td>
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada data mahasiswa</td></tr>";
            }

            // Tutup koneksi
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
