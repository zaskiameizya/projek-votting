<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

/* Background Utama Biru Gelap */
body {
    background-color: #1a2a44;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* posisi kotakan dalam */
    overflow: hidden;
    background-image: url('BG.jpeg');
}

/* icon */
.iconatas {
    position: relative;
    width: 50%;
    height: 100%;
    display: flex;
    justify-content: right;
    align-items: center;
    
}

/* logo di pojok kiri */
.top-logos {
    position: absolute;
    top: 20px;
    left: -200px;
    right: 50px;
    display: flex;
    gap: 10px;
}

.logo-circle {
    width: 30px;
    height: 40px;
    
}


.boxdalam {
    background-color: #a5c3e6; 
    padding: 50px;
    border-radius: 20px;
    text-align: center;
    width: 500px;
    position: relative;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    margin-right: -50px;
}

/* icon user */
.icon-usererror {
    background-color: #263238;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: -75px auto 20px auto;
    color: white;
    font-size: 30px;
    border: 5px solid #1a2a44;
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

.btn-cobalagi {
    background-color: #e0eafc;
    border: none;
    padding: 12px 30px;
    border-radius: 10px;
    color: #1a2a44;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.btn-coba {
    background-color: white;
    transform: scale(1.05);
}

.icon-refresh {
    margin-right: 8px;
}

.foto-orang{
    margin-right: -160px;
    margin-top: 280px;
    z-index: 2;
}
 

</style>
</head>
<body>
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gagal Login - E-Voting</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="iconatas">
        <div class="top-logos">
            <div class="logo-circle2"><img height="80px" src="logoosis.png"> </div>
            <div class="logo-circle"><img height="70px" src="logoo.png"> </div>
        </div>

        <div class="boxdalam">
            <div class="icon-usererror">
                <span>&#128100;</span>
            </div>
        
            
            <h2>Autentifikasi Gagal!</h2>
            <p>NISN dan Kode salah!</p>

            <button class="btn-cobalagi">
                <span class="icon-refresh">&#8634;</span> COBA LAGI</button>
            
        </div>

        
        </div>

        <div class="foto-orang">
            <img height="360px" src="2smk-removebg-preview.png">
</div>
 
        
</body>
</html>
</body>
</html>