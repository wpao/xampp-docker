<?php
// Konfigurasi database
$host = 'database'; // Nama service dari database di docker-compose
$username = 'root'; // Username database
$password = 'example'; // Password root database
$dbname = 'testdb'; // Nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil ke database '$dbname'<br>";

// Query untuk membaca tabel (contoh tabel users)
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Menampilkan hasil query
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data dalam tabel.";
}

// Menutup koneksi
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db connect</title>
</head>
<body>
    <h1>Hello, Docker!</h1>
</body>
</html>