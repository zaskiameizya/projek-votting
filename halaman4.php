<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"rel="stylesheet">
    <link rel="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css"/>
    <style>
      body {
      margin: 0;
      font-family: Arial;
      background-color: #3f6b6f;
      }
    
      .container {
      display: flex;
      height: 100vh;
      gap: 40px;
      }

      .sidebar{
      width: 220px;
      background-color: #2f575c;
      color: white;
      padding: 25px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      }

      .sidebar h2{
      text-align:
      }
    
      .menu{
      list-style: none;
      padding: 0;
      margin-top: 30px;
      }

      .menu li{
      margin: 15px 0;
      font-size: 16px;
      cursor: pointer;
      }

      .user{
      text-align: center;
      }
 
      .user button{
      background-color: black;
      color: white;
      border: none;
      padding: 8px 20px;
      border-radius: 20px;
      }

      .content{
      flex: 1;
      padding: 40px;
      }

      .judul{
      background-color: #d9d9d9;
      text-align: center;
      padding: 10px;
      margin-bottom: 50px;
      }

      .kandidat{
      display: flex;
      justify-content: center;
      gap: 40px;
      }

      .cardkandidat{
      background-color: #f2d4bf;
      width: 180px;
      padding: 20px;
      border-radius: 20px;
      text-align: center;
      }

      .fotobulat{
      width: 120px;
      height: 120px;
      border-radius: 60px;
      margin: 10px 0;
      }

      .cardbutton{
      background-color: #444;
      color: white;
      border: none;
      padding: 8px 25px;
      border-radius: 10px;
      cursor: pointer;
      }
</style>
</head>
<body>
   <div class="container">
    <h2>Sistem<br>E-Voting<br>Osis</h2>

    <ul class="menu">
        <li>Voting</li>
        <li>Hasil Voting</li>
    </ul>

    <div class="user">
        <p>HI Alleta</p>
        <button>Log out</button>
    </div>

    <div class="content">
        <div class="judul">
            <h1>DAFTAR KANDIDAT</h1>
    </div>

    <div class="card">
        <h3>Kandidat 1</h3>
        <img src="WhatsApp_image_2026-01-12_at_14.10.14-removebg-preview.png">
        <button>Details</button>
    </div>

    <div class="card">
        <h3>Kandidat 2</h3>
        <img src="WhatsApp_image_2026-01-12_at_14.12.02-removebg-preview.png">
        <button>Details</button>
    </div>

    <div class="card">
        <h3>Kandidat 3</h3>
        <img src="WhatsApp_image_2026-01-12_at_14.15.09-removebg-preview.png">
        <button>Details</button>
    </div>
</div>
</body>
</html>