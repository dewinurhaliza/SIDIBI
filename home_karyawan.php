<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('Location: login-karyawan.php');
    exit();
}

include "koneksi.php";

$sql = "
    SELECT 
        s.hari AS hari,
        s.shift_pagi AS pagi,
        s.shift_sore AS sore,
        s.periode AS periode
    FROM
        shift_pegawai s";

$result = mysqli_query($mysqli, $sql);
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
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 50%, rgba(0, 0, 0, 0.8) 50%);
            background-position: center;
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar-ku {
            width: 100%;
            max-width: 1200px;
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
            color: #ff7200;
            font-size: 5px;
            font-family: 'Poppins', sans-serif;
            font-weight: 10vh;
        }

        .logo img {
            width: 24vh;
        }

        .menu {
            display: flex;
            align-items: center;
            padding-top: 18px;;
        }

        ul {
            display: flex;
            list-style: none;
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

        .content {
            width: 1200px;
            left: 50px;
            height: auto;
            margin: auto;
            color: #fff;
            position: relative;
      }

      .content h1 {
        font-family: "Poppins", sans-serif;
        font-size: 50px;
        font-weight: 600;
        padding-left: 20px;
        letter-spacing: 2px;
        margin-bottom: 30px;
      }
      .content .par {
        padding-left: 20px;
        padding-bottom: 25px;
        letter-spacing: 1.2px;
        line-height: 30px;
      }
      
      .content span {
        color: #ff7200;
        font-size: 65px;
      }

        .jadwal h2 {
            font-size: 30px;
            text-align: center;
        }

        .tabel-jadwal {
            border-radius: 10px;    
        }

        table {
            background-color:#fff;
            color: #000;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
    </style>
</head>
<body>

    <div class="main">
        <div class="navbar-ku">
            <h2 class="logo"><img src="logo.png" alt="sidibi_logo"></h2>
            <div class="menu">
                <ul>
                    <li><a href="home_karyawan.php">HOME</a></li>
                    <li><a href="pengaduan_karyawan.php">FORM PENGADUAN</a></li>
                    <li><a href="pengajuan_cuti.php">PENGAJUAN CUTI</a></li>
                    <li><a href="pengajuan_cuti.php">PROFIL</a></li>
                </ul>
            </div>
        </div> 
        <div class="content">
            <h1><br>Selamat Datang di <br /><span>SIDIBI </span> <br />Supermarket</h1>
            <p class="par">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque
            expedita atque eveniet <br />
            quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus
            <br />
            a quae totam ipsa illum minus laudantium?
            <div class="jadwal">
                <h2>Jadwal Shift</h2>
                <div class="table-responsive">
                    <table 
                        id="example"
                        class="table table-striped table-hover"
                        style="width: 1050px"
                        >
                        <thead>
                            <tr>
                                <th>Hari</th>
                                <th>Shift Pagi</th>
                                <th>Shift Sore</th>
                                <th>Periode</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                                    if($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "
                                                    <tr>
                                                        <td> {$row['hari']} </td>
                                                        <td>" . nl2br(str_replace(",", "\n", $row['pagi'])) . "</td>
                                                        <td>" . nl2br(str_replace(",", "\n", $row['sore'])) . "</td>
                                                        <td> {$row['periode']} </td>
                                                    </tr>" ;
                                                        
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>No data available</td></tr>";
                                    }
                                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
