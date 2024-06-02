<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDIBI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
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

        h1 {
            margin-top: 30px;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            text-align: center;
        }
        
        .profile-container {
            background: linear-gradient(135deg, #FFA726, #FF7043);
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 90%;
            max-width: 1000px;
            margin-top: 50px;
            animation: fadeIn 1s;
            margin-bottom: 30px;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .profile-header {
            display: flex;
            align-items: center;
            padding: 20px;
            background: linear-gradient(135deg, #FFA726, #FF7043);
            position: relative;
            border-bottom: 1px solid #ddd;
        }
        .profile-header img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 2px solid #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .profile-header .camera-icon {
            position: absolute;
            top: 80px;
            left: 80px;
            background-color: #fff;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .profile-header .camera-icon i {
            color: #555;
        }
        .profile-details {
            margin-left: 20px;
        }
        .profile-details h2 {
            font-size: 28px;
            color: #fff;
        }
        .profile-info {
            padding: 20px;
            background: linear-gradient(135deg, #FFCC80, #FFE0B2);
        }
        .profile-info table {
            width: 100%;
            border-collapse: collapse;
        }
        .profile-info th, .profile-info td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 16px;
        }
        .profile-info th {
            background-color: #FFE0B2; /* Soft beige color */
            color: #333;
        }
        .profile-info td {
            background-color: #FFCC80; /* Soft orange color */
        }
        .profile-info .icon {
            margin-right: 10px;
            color: #555;
        }
        .edit-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #fff;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .edit-icon i {
            color: #555;
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
    <div class="main">
            <div class="navbar-ku">
                    <h2 class="logo"><img src="logo.png" alt="sidibi_logo"></h2>
                    <div class="menu">
                        <ul>
                            <li><a href="home_karyawan.php">HOME</a></li>
                            <li><a href="pengaduan_karyawan.php">FORM PENGADUAN</a></li>
                            <li><a href="pengajuan_cuti.php">PENGAJUAN CUTI</a></li>
                            <li><a href="profile.php">PROFIL</a></li>
                        </ul>
                    </div>
            </div> 
            <h1>Profil Karyawan</h1>

        <div class="profile-container">
            <div class="profile-header">
                <img src="profil.png" alt="Profile Picture">
                <div class="camera-icon">
                    <i class="fa fa-camera"></i>
                </div>
                <div class="profile-details">
                    <h2>Kim Jong Un</h2>
                </div>
                <div class="edit-icon">
                    <i class="fa fa-edit"></i>
                </div>
            </div>
            <div class="profile-info">
                <table>
                    <tr>
                        <th><i class="fa fa-building icon"></i>Jabatan</th>
                        <td>Pegawai</td>
                    </tr>
                    <tr>
                        <th><i class="fa fa-sitemap icon"></i>Unit Kerja</th>
                        <td>Divisi Kepegawaian</td>
                    </tr>
                    <tr>
                        <th><i class="fa fa-venus-mars icon"></i>Jenis Kelamin</th>
                        <td>Laki-laki</td>
                    </tr>
                    <tr>
                        <th><i class="fa fa-pray icon"></i>Agama</th>
                        <td>Islam</td>
                    </tr>
                    <tr>
                        <th><i class="fa fa-envelope icon"></i>Email</th>
                        <td>jong@gmail.com</td>
                    </tr>
                    <tr>
                        <th><i class="fa fa-phone icon"></i>No. Telepon</th>
                        <td>083191831829</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <footer>
      <p>&copy; 2024 Sistem Informasi Pegawai SIDIBI.</p>
    </footer>
</body>
</html>