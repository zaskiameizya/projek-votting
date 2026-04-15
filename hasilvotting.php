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
            min-height: 100vh;
            background-image: url('BG.jpeg');
            color: white;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 150px;
            background-color: #4c6f7a;
            padding: 20px;
            display: flex;
            flex-direction: column;
            box-shadow: 2px 0 5px rgba(0,0,0,0.3);
        }

        .sidebar h2 {
            font-size: 18px;
            text-align: center;
            margin-bottom: 50px;
            line-height: 1.4;
        }

        .nav-links {
            flex-grow: 1;
        }

        .nav-links div {
            padding: 15px 0;
            cursor: pointer;
            font-size: 14px;
            
        }

        .nav-links .active {
            font-weight: bold;
            color: #f2f4f5;
            background:rgba(255,255,255,0.1);
            border-radius: 15px;
        }

        .user-info {
            font-size: 14px;
            text-align: center;
        }

        .logout-btn {
            margin-top: 10px;
            background-color: #2c3e50;
            border: 1px solid #7f8c8d;
            padding: 5px 15px;
            color: white;
            cursor: pointer;
            border-radius: 20px;
            display: inline-block;
        }

        /* Main Content Styling */
        .main-content {
            flex-grow: 1;
            padding: 40px;
            background-image: url('BG.jpeg');
            display: flex;
            flex-direction: column;
            align-items: center;
            
        }

        .title {
            font-size: 32px;
            font-family: 'Inika', serif;
            font-weight: bold;
            background-color: #F6FFFC;
            
            text-transform: uppercase;
            margin-bottom: 40px;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        /* Card Container */
        .card-container {
            display: flex;
            gap: 25px;
            justify-content: center;
            width: 100%;
            max-width: 1000px;
        }

        .card {
            background-color: #bdc3c7;
            border-radius: 25px;
            padding: 20px;
            width: 240px;
            color: #2c3e50;
            text-align: center;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        .card h3 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .photo-box {
            width: 100%;
            height: 250px;
            background-color: #ecf0f1;
            margin-bottom: 20px;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #95a5a6;
        }

        .photo-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Result Labels */
        .result-label {
            background-color: #34495e;
            color: white;
            padding: 5px;
            border-radius: 15px;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 14px;
        }

        .percentage-label {
            background-color: #34495e;
            color: white;
            padding: 5px;
            border-radius: 15px;
            
            margin: 0 auto;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Sistem<br>E-Voting<br>Osis</h2>
        <div class="nav-links">
            <div>Voting</div>
            <div class="active">Hasil Voting</div>
        </div>
        <div class="user-info">
            <p>Hi Alletta</p>
            <div class="logout-btn">Log Out →</div>
        </div>
    </div>

    <div class="main-content">
        <h1 class="title">HASIL VOTING</h1>

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
    </div>

</body>
</html>