<?php
include 'koneksi.php';

$query = "SELECT * FROM pengajuan_cuti WHERE status = 'Pending'";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pengajuan Cuti</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            width: 1350px;
            border-collapse: collapse;
            margin: 20px 50px;
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
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
            color: white;
        }
        .btn-acc {
            background-color: #4CAF50;
        }
        .btn-reject {
            background-color: #f44336;
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
    <p style="color: #7AB2B2; font-size: 35px; font-weight: bold;" align="center">KELOLA PENGAJUAN CUTI</p><br>
    <table>
        <tr>
            <th>Nama</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Jenis Cuti</th>
            <th>Alasan</th>
            <th>Aksi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["nama"] . "</td>
                        <td>" . $row["tanggal_mulai"] . "</td>
                        <td>" . $row["tanggal_selesai"] . "</td>
                        <td>" . $row["jenis_cuti"] . "</td>
                        <td>" . $row["alasan"] . "</td>
                        <td>
                            <a href='update_cuti.php?id=" . $row["id"] . "&status=Approved' class='btn btn-acc'>Approve</a>
                            <a href='update_cuti.php?id=" . $row["id"] . "&status=Rejected' class='btn btn-reject'>Reject</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr style='text-align: center'><td colspan='6'>Tidak ada pengajuan cuti yang menunggu persetujuan</td></tr>";
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
