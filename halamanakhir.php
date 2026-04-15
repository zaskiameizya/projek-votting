<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem E-Voting OSIS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background-color: #f0f2f5;
        }

        
        .sidebar {
            width: 150px;
            background-color: #4c6f7a; 
            color: white;
            display: flex;
            flex-direction: column;
            padding: 20px 0;
        }

        .sidebar-header {
            padding: 20px;
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .nav-menu {
            flex-grow: 1;
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


        .nav-item.active {
            background-color: #243b55;
            color: white;
            border-left: 5px solid #3498db;
        }

        .sidebar-footer {
            padding: 20px;
            
        }

        .user-info {
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .btn-logout {
            background: #2c3e50;
            color: white;
            border: 1px solid #455a64;
            padding: 8px 15px;
            border-radius: 20px;
            cursor: pointer;
            width: 100%;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* --- MAIN CONTENT --- */
        .main-content {
            flex-grow: 1;
            background-image: url('BG.jpeg');
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            color: white;
            max-width: 600px;
            z-index: 2;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-card h2 {
            font-size: 1.5rem;
            line-height: 1.5;
            margin-bottom: 30px;
            font-weight: 500;
        }

        .btn-login-page {
            background-color: #0d1b2a;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .btn-login-page:hover {
            background-color: #1b263b;
            transform: translateY(-2px);
        }

        
        .illustration-container {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 20px;
            z-index: 1;
            opacity: 0.8;
        }
         .foto-orang{
            margin-right: -150px;
            margin-top: 280px;
            z-index: 2;
            margin-bottom: -25px;
        }

    </style>
</head>
<<<<<<< HEAD
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* posisi kotakan dalam */
    overflow: hidden;
    background-image: url('BG.jpeg');
}

.container{
  display:flex;
  height:100vh;
}

.sidebar{
  width:140px;
  background:#4c6f7a;
  color:white;
  padding:50px 20px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-right:100px;
}

.sidebar h2{
  text-align:center;
  font-size:20px;
  margin-bottom:40px;
  margin-right: 10px;
}

.menu{
  list-style:none;
}

.menu li{
  padding:10px;
  margin-bottom:5px;
  background:rgba(255,255,255,0.1);
  border-radius:8px;
  cursor:pointer;
}

.menu p{
  padding:10px;
  margin-bottom:5px;
  border-radius:8px;
  cursor:pointer;
}
.menu li:hover{
  background:rgba(255,255,255,0.25);
}

.logout{
  padding:10px;
  border:none;
  border-radius:8px;
  background:#2c4f5a;
  color:white;
  cursor:pointer;
}

.boxdalam {
    background-color: #a5c3e6; 
    padding: 50px;
    border-radius: 20px;
    text-align: center;
    width: 500px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    margin-left: 100px;
    margin-right: 100px;
}

h2 {
    color: #1a2a44;
    margin-bottom: 10px;
    font-size: 24px;
}

p {
    color: #333;
    font-weight: bold;
    margin-bottom: 25px;
}
</style>
=======
>>>>>>> c960b7a8c8ae03878b92b7e42fa4cd6217a36f9a
<body>

    <div class="sidebar">
        <div class="sidebar-header">
            Sistem<br>E-Voting OSIS
        </div>
        
        <div class="nav-menu">
            <a href="#" class="nav-item">Voting</a>
            <a href="#" class="nav-item2">Hasil Voting</a>
        </div>

        <div class="sidebar-footer">
            <div class="user-info">Hi Alletta</div>
            <button class="btn-logout">
                Log Out → <i class="fas fa-sign-out-alt"></i>
            </button>
        </div>
    </div>

    <div class="main-content">
        
        <div class="glass-card">
            <h2>Pilihan anda sudah kami simpan,<br>Terima kasih sudah berpartisipasi dalam voting ini.</h2>
            
            <a href="#" class="btn-login-page">
                KEMBALI KE HALAMAN LOGIN <i class="fas fa-undo-alt"></i>
            </a>
        </div>

          <div class="foto-orang">
            <img height="360px" src="dua-orang.png">
          </div>
        
        </div>
 
    </div>

</body>
</html>