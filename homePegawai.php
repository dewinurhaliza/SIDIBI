<?php
include 'koneksi.php';

// Tentukan ID pegawai yang akan melihat status cutinya (misalnya, didapatkan dari sesi login)
$id_pegawai = 1; // Ganti dengan mekanisme mendapatkan ID pegawai dari sesi login

$query = "SELECT * FROM pengajuan_cuti ORDER BY tanggal_mulai DESC";
$result = $conn->query($query);
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
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #987070;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .shift{
            margin: 50px;
        }
        .cuti{
            margin: 50px;
        }
        h2{
            font-size: 25px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="brand">SIDIBI</div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="pengaduan.html">Pengaduan</a></li>
                    <li><a href="ajukan_cuti.html">Cuti</a></li>
                    <li><a href="profil.html">Profil</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>

    <div class="shift">
    <h2>JADWAL KERJA SUPERMARKET DIBI</h2>
    <table>
        <tr>
            <th>Hari</th>
            <th>Shift Pagi</th>
            <th>Shift Sore</th>
        </tr>
        <?php
        $query = "SELECT * FROM shift_pegawai";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $shift_pagi = explode(',', $row["shift_pagi"]);
                $shift_sore = explode(',', $row["shift_sore"]);
                
                $shift_pagi_text = implode('<br>', $shift_pagi);
                $shift_sore_text = implode('<br>', $shift_sore);
                
                echo "<tr>
                        <td>" . $row["hari"] . "</td>
                        <td>" . $shift_pagi_text . "</td>
                        <td>" . $shift_sore_text . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada jadwal kerja tersedia</td></tr>";
        }
        ?>
    </table>
    </div>

    <div class="cuti">
        <h2>Status Pengajuan Cuti</h2>
        <table>
            <tr>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Jenis Cuti</th>
                <th>Alasan</th>
                <th>Status</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["tanggal_mulai"] . "</td>
                            <td>" . $row["tanggal_selesai"] . "</td>
                            <td>" . $row["jenis_cuti"] . "</td>
                            <td>" . $row["alasan"] . "</td>
                            <td>" . $row["status"] . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada pengajuan cuti</td></tr>";
            }
            ?>
        </table>
    </div>


    <footer>
        <p>&copy; 2024 Sistem Informasi Pegawai SIDIBI.</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
