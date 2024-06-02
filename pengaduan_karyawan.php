<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO pengaduan (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

    if ($mysqli->query($sql) === TRUE) {
        $success = "Pengaduan berhasil dikirim!";
    } else {
        $error = "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Home Karyawan</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('bg.jpg');
            background-size: cover;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif;
        }

        .main {
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8));
            background-position: center;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .navbar-ku {
            width: 100%;
            max-width: 1400px;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-sizing: border-box;
            background-color: rgba(0, 0, 0, 0.7); /* Dark background for better visibility */
            border-bottom: 2px solid #ff7200;
        }

        .logo {
            display: flex;
            align-items: center;
            color: #ff7200;
            font-size: 24px;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
        }

        .logo img {
            width: 24vh;
            margin-right: 20px;
            margin-left: 20px;
        }

        .menu {
            display: flex;
            align-items: center;
            /* padding-top: 18px;; */
        }

        ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-left: 20px;
        }

        ul li a {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            padding: 10px 15px;
            transition: 0.4s ease-in-out;
            border-radius: 5px;
            text-decoration: none;
            color: white;
        }

        ul li a:hover {
            background-color: #ff7200;
            color: #000;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        
        h1 {
            text-align: center;
            font-size: 25px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: black;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            padding: 10px 15px;
            background-color: #ff7200;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #000;
        }
        .message {
            margin-top: 20px;
            font-size: 14px;
        }
        .message.success {
            color: #28a745;
        }
        .message.error {
            color: #dc3545;
        }

        footer {
            text-align: center;
            background-color: #ff7200;
            color: #fff;
            height: 60px;
            padding: 15px;
        }
    </style>
</head>
<body>

    <div class="navbar-ku">
        <h2 class="logo"><img src="logo.png" alt="sidibi_logo"></h2>
        <div class="menu">
            <ul>
                <li><a href="home_karyawan.php">HOME</a></li>
                <li><a href="#">FORM PENGADUAN</a></li>
                <li><a href="pengajuan_cuti.php">PENGAJUAN CUTI</a></li>
                <li><a href="pengajuan_cuti.php">PROFIL</a></li>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <h1>Form Pengaduan Pegawai</h1>
            <?php
            if (isset($success)) {
                echo "<p class='message success'>$success</p>";
            }
            if (isset($error)) {
                echo "<p class='message error'>$error</p>";
            }
            ?>
            <form method="post" action="">
                <div class="form-group">
                    <label for="nama" style="color: black;">Nama yang Dilaporkan:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="jabatan" style="color: black;">Jabatan yang Dilaporkan:</label>
                    <input type="text" id="jabatan" name="jabatan" required>
                </div>
                <div class="form-group">
                    <label for="alasan" style="color: black;">Alasan Pengaduan:</label>
                    <textarea id="alasan" name="alasan" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="bukti" style="color: black;">Upload File Pendukung :</label>
                    <input type="file" id="bukti" name="bukti" accept="image/*" required><br>
                </div>
                <div class="form-group">
                    <button type="submit">Kirim Pengaduan</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
      <p>&copy; 2024 Sistem Informasi Pegawai SIDIBI.</p>
    </footer>
    
</body>
</html>
