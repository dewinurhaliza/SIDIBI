<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDIBI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        * {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .navbar {
            width: 100%;
            margin: auto;
        }
        nav {
            z-index: 100;
            color: white;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
            line-height: 60px;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }
        nav .brand {
            font-size: 28px;
            float: left;
            position: relative;
            line-height: 60px;
            font-weight: bold;
            margin-left: 20px;
        }
        nav .menu {
            float: right;
            height: 60px;
            max-width: 600px;
        }
        nav .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }
        nav .menu ul li {
            list-style-type: none;
            float: left;
            line-height: 60px;
        }
        nav ul li a {
            color: white;
            text-align: center;
            padding: 0 16px;
            text-decoration: none;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        footer {
            padding: 30px 0;
            background-color: black;
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
            margin-top: 80px;
            animation: fadeIn 1s;
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
                <li><a href="profile.php">Profil</a></li>
            </ul>
        </div>
    </div>
</nav>
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
</body>
</html>
