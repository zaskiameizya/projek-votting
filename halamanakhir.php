<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Akhir</title>
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />
      
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:  'Inika', serif;
        }

        body {
            display: flex;
            height: 100vh; 
            background-image: url('BG.jpeg');
            background-size: cover;
            color: white;
            overflow: hidden;
        }

      
        .sidebar {
            width: 200px; 
            background-color: #4c6f7a;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            border-right: 1px solid #2c3e50;
            box-shadow: 4px 0 15px rgba(0,0,0,0.3);
            z-index: 10;
        }

        .sidebar h2 {
            font-size: 22px;
            text-align: center;
            margin-bottom: 50px;
            line-height: 1.4;
            font-family: 'Inika', serif;
        }

        .nav-links {
            flex-grow: 1;
        }

        .nav-links div {
            padding: 15px 15px;
            cursor: pointer;
            font-size: 15px;
            margin-bottom: 10px;
            transition: 0.3s;
            background: rgba(255,255,255,0.15);
            border-radius: 12px;
            font-weight: bold;
        }

        .nav-links .active {
            font-weight: bold;
            color: #f2f4f5;
            border-radius: 12px;
            background: transparent;
        }

        .user-info {
            font-size: 14px;
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }

        .logout-btn {
            margin-top: 10px;
            background-color: #2c3e50;
            padding: 10px 20px;
            color: white;
            cursor: pointer;
            border-radius: 20px;
            display: inline-block;
            outline: 2px solid black;
        }

        .content{
            margin-left:150px;
            width:calc(100% - 150px);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            position:relative;
    
        } 

        .nav-item {
            padding: 15px 25px;
            cursor: pointer;
            display: block;
            text-decoration: none;
            color: #fbfcfd;
            background:rgba(255,255,255,0.1);
        }

        .nav-item2{
            padding: 15px 25px;
            cursor:pointer;
            color: white;
            text-decoration: none;
        }


        .card{
            width: 700px;
            height: 400px;
            background:#698D9F;
            border-radius:10px;
            text-align:center;
            padding-top:50px;
            position:relative;
            z-index:2;
            border: 3px solid #386982;
        }

        .card h1{
            color:white;
            font-size: 32px;
            line-height:42px;
            font-weight:bold;
            margin-top: 50px;
        }

        .btn{
            margin-top:15px;
            background:#5c6159;
            color:white;
            border-radius:18px;
            padding:12px 28px;
            font-size:18px;
            font-weight:bold;
            cursor:pointer;
            margin-top: 50px;
        }

        .students{
            position:absolute;
            left:90px;
            bottom: -50px;
            width:400px;
            z-index:3;
            margin-left: 200px;
        }

    </style>
</head>
<body>

    <nav class="sidebar">
        <h2>Sistem<br>E-Voting<br>Osis</h2>
        <div class="nav-links">
            <div onclick="window.location.href='halaman4.php'">Voting</div>
            <div class="active" onclick="window.location.href='hasilvotting.php'">Hasil Voting</div>
        </div>
        <div class="user-info">
            <p>Hi Alletta</p>
            <div class="logout-btn" onclick="window.location.href='index.php'">Log Out →</div>
        </div>
    </nav>

     <div class="content">

        <div class="card">

            <h1>
                Pilihan anda sudah kami simpan,<br>
                Terima kasih sudah berpartisipasi<br>
                dalam voting ini.
            </h1>

            <button class="btn" onclick="window.location.href='index.php'">KEMBALI KE HALAMAN LOGIN <i class="hgi hgi-stroke hgi-rounded hgi-link-backward"></i></button>
            
        </div>

    </div>
     
    <img src="dua-orang.png" class="students">
      
</body>
</html>