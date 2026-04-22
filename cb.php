<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-Voting OSIS</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", sans-serif;
}

body {
    display: flex;
    height: 100vh;
    background: #f2f6fb;
}

/* Sidebar */
.sidebar {
    width: 250px;
    background: linear-gradient(180deg, #2d4b7c, #1e3558);
    color: white;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 30px;
    line-height: 1.4;
}

.menu {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.menu a {
    text-decoration: none;
    color: white;
    padding: 10px;
    border-radius: 8px;
    transition: 0.3s;
}

.menu a:hover {
    background: rgba(255,255,255,0.2);
}

.bottom {
    text-align: center;
}

.logout {
    margin-top: 10px;
    padding: 10px;
    background: #3b5c8f;
    border: none;
    color: white;
    border-radius: 8px;
    cursor: pointer;
}

/* Content */
.content {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    background: linear-gradient(135deg, #4b79a1, #283e51);
    width: 600px;
    border-radius: 20px;
    padding: 40px;
    color: white;
    text-align: center;
    position: relative;
}

/* Ilustrasi */
.illustration {
    position: absolute;
    left: -80px;
    bottom: 0;
}

.illustration img {
    width: 200px;
}

/* Text */
.card h1 {
    font-size: 22px;
    line-height: 1.5;
    margin-bottom: 30px;
}

/* Button */
.btn {
    display: inline-block;
    padding: 12px 25px;
    background: transparent;
    border: 2px solid white;
    border-radius: 30px;
    color: white;
    text-decoration: none;
    transition: 0.3s;
}

.btn:hover {
    background: white;
    color: #283e51;
}
</style>

</head>
<body>

<div class="sidebar">
    <div>
        <h2>Sistem<br>E-Voting<br>Osis</h2>
        <div class="menu">
            <a href="#">Voting</a>
            <a href="#">Hasil Voting</a>
        </div>
    </div>

    <div class="bottom">
        <p>Hi Alletta</p>
        <button class="logout">Log Out</button>
    </div>
</div>

<div class="content">
    <div class="card">

        <div class="illustration">
            <!-- Ganti dengan gambar kamu -->
            <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" alt="">
        </div>

        <h1>
            Pilihan anda sudah kami simpan,<br>
            Terima kasih sudah berpartisipasi<br>
            dalam voting ini.
        </h1>

        <a href="#" class="btn">KEMBALI KE HALAMAN LOGIN</a>

    </div>
</div>

</body>
</html>