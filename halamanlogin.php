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
    color: white;
    font-size: 25px;
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
    display: flex;
    align-items: center;
    background-color: #D9D9D9;
    border-radius: 20px;
    padding: 10px 15px;
    margin-bottom: 20px;
}
.nisn i, .kode i {
    font-size: 20px;
    margin-right: 10px;
}
.nisn input, .kode input {
    border: none;
    outline: none;
    background: transparent;
    width: 100%;
    font-size: 18px;
    text-align: center;
}
.login-btn {
    width: 100%;
    padding: 12px;
    font-size: 18px;
    background-color: #0B2635;
    color: white;
    border: none;
    border-radius: 20px;
    cursor: pointer;
}
.login-btn:hover {
    background-color: #12394f;
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
    <form class="form">

        <div class="nisn">
            <i class="hgi hgi-stroke hgi-edit-user-02"></i>
            <input type="text" placeholder="NISN">
        </div>

        <div class="kode">
            <i class="hgi hgi-stroke hgi-authorized"></i>
            <input type="password" placeholder="Kode">
        </div>

        <button type="submit" class="login-btn">Login</button>

    </form>
</div>

<div class="footer">
    <p>&copy; 2026 SMK Negeri 1 Batang | All rights reserved</p>
</div>

</body>
</html>