<?php
include 'koneksi.php';

$query = "SELECT * FROM data_pegawai";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDIBI</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            padding-left: 20px;
            margin: auto;
            border-collapse: collapse;
        }
        th{
            background-color: #03AED2; 
            color: white;
        }
        tr:nth-child(odd) {
            background-color: #f2f2f2; 
        }
        tr:hover {
            background-color: #E0FBE2; 
        }
        .tambah{
            text-decoration: none; 
            background-color: #7AB2B2; 
            color: white; 
            margin-right: 100px; 
            padding: 10px 20px; 
            border-radius: 5px; 
            float: right;
        }
        .tambah:hover{
            background-color: #4D869C;
        }
        .aksi {
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
            color: white;
            transition: background-color 0.3s;
        }
        .edit {
            background-color: #4CAF50; 
        }
        .edit:hover {
            background-color: #45a049; 
        }
        .delete {
            background-color: #f44336; 
        }
        .delete:hover {
            background-color: #d32f2f; 
        }
    </style>
</head>
<body>
    <nav>
        <div class="navbar">
          <div class="brand">
              SIDIBI
          </div>
          <div class="menu">
            <a href="#" class="tombol-menu">
              <span class="garis"></span>
              <span class="garis"></span>
              <span class="garis"></span>
            </a>
            <ul>
              <li><a href="pegawai.php">Pegawai</a></li>
              <li><a href="shift.php">Shift</a></li>
              <li><a href="pengaduan.html">Pengaduan</a></li>
              <li><a href="status_cuti.php">Cuti</a></li>
              <li><a href="profil.html">Profil</a></li>

            </ul>
          </div>
        </div>
    </nav>
    <br><br><br><br><br>

    <p style="color: #7AB2B2; font-size: 35px; font-weight: bold;" align="center">SUPERMARKET DIBI</p><br>
    <p style="color: #7AB2B2; font-size: 27px; font-weight: bold;" align="center">DATA PEGAWAI</p>
    <br>
    <a href="tambah.html" class="tambah">Tambah Data</a>

    <br><br><br>
    <table border="1" cellspacing="0" style="color: black; text-align: center;">
        <tr>
            <th width="100" height="35">ID</th>
            <th width="250">Nama</th>
            <th width="200">Jenis Kelamin</th>
            <th width="200">Alamat</th>
            <th width="200">Jabatan</th>
            <th width="150">Gaji</th>
            <th width="150">Aksi</th>
        </tr>

    <?php
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td height='35'>" . $row["id"]. "</td>
                        <td>" . $row["nama"]. "</td>
                        <td>" . $row["jenis_kelamin"]. "</td>
                        <td>" . $row["alamat"]. "</td>
                        <td>" . $row["jabatan"]. "</td>
                        <td>" . $row["gaji"]. "</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."' class='aksi edit'>Edit</a> | 
                            <a href=delete.php?id=" . $row["id"] ."' class='aksi delete' onclick=\"return confirm ('Apakah Anda yakin ingin menghapus data ini?')\">Delete</a>
                        </td>
                        </tr>";

            }
        } else {
            echo "0 results";
        }
    ?>
    </table>
    <br>
    <footer>
        <p>&copy; 2024 Sistem Informasi Pegawai SIDIBI.</p>
    </footer>
</body>
</html>
