<?php
include 'koneksi.php';

$query = "SELECT * FROM shift_pegawai ORDER BY periode DESC, FIELD(hari, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu')";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Shift Pegawai</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            width: 1350px;
            border-collapse: collapse;
            margin: 20px 50px;
            margin: auto;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #03AED2;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .edit{
            text-decoration: none; 
            background-color: #7AB2B2; 
            color: white; 
            padding: 10px 20px; 
            border-radius: 5px; 
            display: inline-block; 
            float: right; 
            margin-right: 50px;
        }
        .edit:hover{
            background-color: #4D869C;
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
    <p style="color: #7AB2B2; font-size: 35px; font-weight: bold;" align="center">JADWAL SHIFT KERJA SUPERMARKET DIBI</p><br>
    <a href="editShift.php" class="edit">Update Jadwal</a><br><br><br>
    <table>
        <tr>
            <th>Periode</th>
            <th>Hari</th>
            <th>Shift Pagi</th>
            <th>Shift Sore</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["periode"] . "</td>
                        <td>" . $row["hari"] . "</td>
                        <td>" . nl2br(str_replace(",", "\n", $row["shift_pagi"])) . "</td>
                        <td>" . nl2br(str_replace(",", "\n", $row["shift_sore"])) . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada jadwal shift</td></tr>";
        }
        ?>
    </table>
    <br><br>
    <footer>
        <p>&copy; 2024 Sistem Informasi Pegawai SIDIBI.</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
