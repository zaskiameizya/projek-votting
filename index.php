<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>halaman login</title>

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />

<style>
body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-image: url('background.png');
    background-size: cover;
    background-position: center;
}

.logo {
    text-align: center;
    margin-top: 50px;
}

.logo img {
    width: 170px;
}

.sekolah {
    text-align: center;
    font-family: 'Abril Fatface';
    color: white;
    font-size: 30px;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.form {
    width: 90%;
    max-width: 500px;
    background-color: rgba(217, 217, 217, 0.4);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.nisn, .kode {
    position: relative;
    display: flex;
    align-items: center;
    background-color: #D9D9D9;
    border-radius: 20px;
    padding: 12px 15px;
    margin-bottom: 20px;
    font-family: 'Inika';
}

.nisn i, .kode i {
    position: absolute;
    left: 15px;
    font-size: 20px;
    color: #555;
}

.nisn input, .kode input {
    border: none;
    outline: none;
    background: transparent;
    width: 100%;
    font-size: 18px;
    text-align: center;
    font-family: 'Inika', sans-serif;
}

.login-btn {
    width: 100%;
    padding: 12px;
    font-size: 20px;
    font-family: 'Inika';
    font-weight: bold;
    background-color: #0B2635;
    color: white;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.login-btn:hover {
    background-color: #12394f;
}

.login-btn:active {
    background-color: #081b25;
    transform: scale(0.98);
}

.footer {
    text-align: center;
    color: white;
    margin-top: 20px;
    font-size: 14px;
}
</style>
</head>

<body>

<div class="logo">
    <img src="logo.png" alt="Logo">
</div>

<div class="sekolah">
    <h1>SMK NEGERI 1 BATANG</h1>
</div>

<div class="container">
    <form class="form" action="aksi-login.php" method="POST">

        <div class="nisn">
            <i class="hgi hgi-stroke hgi-edit-user-02"></i>
            <input name="nisn" type="text" placeholder="NISN">
        </div>

        <div class="kode">
            <i class="hgi hgi-stroke hgi-authorized"></i>
            <input name="kode" type="password" placeholder="Kode">
        </div>

        <button type="submit" class="login-btn">Login</button>

    </form>
</div>

<div class="footer">
    <p>&copy; 2026 SMK Negeri 1 Batang | All rights reserved</p>
</div>

</body>
</html>