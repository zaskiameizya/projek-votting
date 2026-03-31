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
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            border-radius: 50px;
            box-shadow: 0 4px 8px rgba(61, 57, 57, 0.1);
            background-color: rgba(217, 217, 217, 0.4);
            width: 2800px;
            height: 900px;               
        }
        .form {
           width: 100%;
           display: flex;
           flex-direction: column;
           align-items: center;
           justify-content: center;
           
        }
        .nisn, .kode {
            background-color: #D9D9D9;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50px;
            box-shadow: 0 20px 20px rgba(78, 75, 75, 0.1);
            width: 2500px;
            height: 120px;
            margin: 20px auto;
            overflow: hidden;
            -webkit-text-stroke-width: 5px #9A9E9C;                
        }
        .nisn input, .kode input {
            border: none;
            outline: none;
            background: transparent;
            width: 2500px;
            height: 120px;
            font-size: 70px;
            text-align: center;
            font-family: 'Inika';
            -webkit-text-stroke-width: 5px #9A9E9C;
        }
        .nisn i, .kode i {
            font-size: 70px;
            color: #050505;
            transform: translateX(100px);
        }
        .login-btn {
            background-color: #0B2635;
            color: #FFFFFF;
            font-family: 'Inika';
            font-size: 70px;
            border-radius: 50px;
            width: 2500px;
            height: 120px;
            margin: 20px auto;
            border: none;
            cursor: pointer;
        }
        .login-btn:hover {
            background-color: #0B2635;
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
        <form class="form">
            
             <div class="nisn">
               <i class="hgi hgi-stroke hgi-edit-user-02"></i>
               <input type="text" placeholder="NISN">
             </div>

             <div class="kode">
               <i class="hgi hgi-stroke hgi-authorized"></i>
               <input type="password"  placeholder="Kode">
             </div>

             <button type="submit" class="login-btn">Login</button>

        </form>
    </div>

    <div class="footer">
        <p>&copy; <b>@ 2026 SMK Negeri 1 Batang | All rights reserved</b></p>
    

    
</body>
</html>