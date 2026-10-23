<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistem akademik - SMK Muhammadiyah 1 Pringsewu </title>
    <style>
        * {
          margin:0;
          padding: 0;
          box-sizing: border-box;
        }
        body{
            font-family: 'segoe UI, Tahoma, Geneva, Verdana, Sans-serif';
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .header{
            background: rgb(51, 255, 0);
            padding: 20px;
            box-shadow: 0 2px 10px rgba(255, 250, 250, 0.1);

        }

        .container{
            width: 80%;
            margin: 40px auto;
        }

        .welcome-box{
            background: white;
            padding: 35px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 40px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.2);
        }

        .menu-grid{
            display: flex;
            gap: 35px;
        }

        .menu-card{
            flex: 1;
            background: white;
            padding: 40px 30px;
            border-radius: 12px;
            text-decoration: none;
            color: #333;
            text-align: center;
            box-shadow: 0 4px 14px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .menu-icon{
            font-size: 48px;
            margin-bottom: 10px;
        }

        .menu-card:hover{
            transform: translateY(-6px);
            box-shadow: 0 4px 14px rgba(0,0,0,0.2);
        }

        .footer{
            background: white;
            padding: 25px 0;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.15);
        }

        @media (max-width: 768px){
            .menu-grid{
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1> SISTEM AKADEMIK</h1>
        <p>SMK Muhammadiyah 1 Pringsewu - lampung</p>
</div>

<div class="container">
    <div class="welcome-box">
        <h2>Selamat Datang Di Akademik SMK Muhammadiyah 1 Pringsewu</h2>
        <p>Sistem Informasi Akademik SMK Muhammadiyah 1 Pringsewu - Lampung Aplikasi Untuk Mengelola Data Guru Dan Mata Pelajaran</p>
 </div>


 <div class="menu-grid">
 <a href="guru.php" class="menu-card">
    <div class="menu-icon">👨🏿‍💻</div>
    <h2>Data guru</h2>
    <p>Kelola Data Guru meliputi Tambah, Edit, Hapus, Dan Lihat Data Guru</p>
 </a>



 <a href="mapel.php" class="menu-card">
    <div class="menu-icon">📚</div>
    <h2>Mata Pelajaran</h2>
    <p>Kelola Data Mapel meliputi Tambah, Edit, Hapus, Dan Lihat Data Guru</p>
 </a>
</div>
</div>

 <div class="footer">
    <strong>2024 SMK Muhammadiyah 1 Pringsewu. All rights reserved.</strong>
 </div>
</body>
</html> 