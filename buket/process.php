<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uas_web";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses data jika metode request adalah POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $password = isset($_POST['password']) ? trim($_POST['password']) : null;

    // Validasi input
    if (empty($nama) || empty($email) || empty($password)) {
        echo "<p>Harap isi semua data!</p>";
    } else {
        // Hash password menggunakan bcrypt
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Query untuk memasukkan data
        $stmt = $conn->prepare("INSERT INTO User (nama, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $email, $hashed_password);

        // Eksekusi query dan cek hasil
        if ($stmt->execute()) {
            echo "<p>Data berhasil disimpan ke database!</p>";
            // Redirect ke halaman sukses setelah 3 detik
            header("refresh:3;url=index.html");
        } else {
            echo "<p>Kesalahan SQL: " . $stmt->error . "</p>";
        }

        // Tutup statement
        $stmt->close();
    }
}

// Tutup koneksi
$conn->close();
?>