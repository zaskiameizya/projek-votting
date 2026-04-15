<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Voting - E-Voting Osis</title>
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
            background-image: url('BG.jpeg');
            background-size: cover;
            color: white;
            overflow: hidden;
        }

      
        .sidebar {
            width: 180px; 
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
        }

        .nav-links .active {
            font-weight: bold;
            color: #f2f4f5;
            background: rgba(255,255,255,0.15);
            border-radius: 12px;
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
        }

        .main-wrapper {
            flex: 1; 
            display: flex;
            flex-direction: column;
            overflow-y: auto;
        }

        .header-title {
            width: 100%;
            background-color: #F6FFFC;
            padding: 15px 0;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .title {
            font-size: 30px;
            font-family: 'Inika', serif;
            font-weight: bold;
<<<<<<< HEAD
            background-color: #F6FFFC;
=======
            text-align: center;
>>>>>>> 273d45f4e2b2d966aa0632b201e7ac41102a0fae
            text-transform: uppercase;
            letter-spacing: 2px;
<<<<<<< HEAD
            color: #2c3e50;
        }

        .main-content {
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
=======
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            background:rgba(255,255,255,0.1);
            padding: 15px;
            
>>>>>>> 282158bb01bb218c6d5b15ce0d8f09953b02d33e
        }

        .card-container {
            display: flex;
            gap: 25px;
            justify-content: center;
            flex-wrap: wrap; 
        }

        .card {
            background-color: #bdc3c7;
            border-radius: 25px;
            padding: 20px;
            width: 250px;
            color: #2c3e50;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        .card h3 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .photo-box {
            width: 100%;
            height: 280px;
            background-color: #ecf0f1;
            margin-bottom: 20px;
            border-radius: 15px;
            overflow: hidden;
            border: 2px solid #95a5a6;
        }

        .photo-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .result-label, .percentage-label {
            background-color: #34495e;
            color: white;
            padding: 10px;
            border-radius: 15px;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <nav class="sidebar">
        <h2>Sistem<br>E-Voting<br>Osis</h2>
        <div class="nav-links">
            <div>Voting</div>
            <div class="active">Hasil Voting</div>
        </div>
        <div class="user-info">
            <p>Hi Alletta</p>
            <div class="logout-btn">Log Out →</div>
        </div>
    </nav>

    <div class="main-wrapper">
        <header class="header-title">
            <h1 class="title">HASIL VOTING</h1>
        </header>

        <main class="main-content">
            <div class="card-container">
              
                <div class="card">
                    <h3>Kandidat 1</h3>
                    <div class="photo-box">
                        <img src="cantika.png" alt="Kandidat 1">
                    </div>
                    <div class="result-label">0 orang</div>
                    <div class="percentage-label">0%</div>
                </div>

              
                <div class="card">
                    <h3>Kandidat 2</h3>
                    <div class="photo-box">
                        <img src="alya-azzahra.png" alt="Kandidat 2">
                    </div>
                    <div class="result-label">0 orang</div>
                    <div class="percentage-label">0%</div>
                </div>

              
                <div class="card">
                    <h3>Kandidat 3</h3>
                    <div class="photo-box">
                        <img src="bayu-laksmana.png" alt="Kandidat 3">
                    </div>
                    <div class="result-label">0 orang</div>
                    <div class="percentage-label">0%</div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>