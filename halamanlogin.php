<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman 2</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />
    <style>
        body {
           background-image: url('background.png');
           background-size: cover;
        }
        .logo{
            text-align: center;
            margin-top: 200px;
        }
        .sekolah {
            text-align: center;
            color: white;
            font-family: 'Abril Fatface';
            font-size: 98px;            
        }
        .container { 
            display: flex;  
            flex-direction: column;
            align-items: center;
            margin: 0 auto;
            opacity: 40%;
            border-radius: 50px;
            background-color: #D9D9D9;
            width: 2800px;
            height: 900px;               
        }
        .nisn{
            background-color: #D9D9D9;
            color: #9A9E9C;
            align-items: center;
            opacity: 50%;
            font-family: 'Inika';
            font-size: 24px;
            border-radius: 50px;
        }
        .kode{
            background-color: #D9D9D9;
            color: #9A9E9C;
            align-items: center;
            opacity: 50%;
            font-family: 'Inika';
            font-size: 24px;
            border-radius: 50px;
        }
        .button{
            background-color: #0B2635;
            color: #FFFFFF;
            align-items: center;
            opacity: 50%;
            font-family: 'Inika';
            font-size: 24px;
        }
        .footer {
            text-align: center;
            color: #FFFFFF;
            margin-top: 20px;
            font-family: 'Inika';   
            font-size: 50px;
        }

    </style>
</head>
<body>


    <div class="logo">
        <img src="logo.png" alt="Logo" width="600px" height="600px">
    </div>

    <div class="sekolah">
        <h1>SMK NEGERI 1 BATANG</h1>
    </div>

    <div class="container">
        <div class="nisn">
            <i class="hgi hgi-solid hgi-user-03"></i>
            <input type="password" placeholder="NISN">
        </div>

        <div class="kode">
            <i class="hgi hgi-solid hgi-authorized"></i>
            <input type="password" id="kode" name="kode" placeholder="Kode">
        </div>

        <div class="button">
            <button type="submit">Login</button>
        </div>
    </div>

    <div class="footer">
        <p>&copy; <b>@ 2026 SMK Negeri 1 Batang | All rights reserved</b></p>
    

    
</body>
</html>