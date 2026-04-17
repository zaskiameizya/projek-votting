<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Hasil Voting</title>

<style>
body {
    margin: 0;
    font-family: Georgia, serif;
    display: flex;
}

/* ================= SIDEBAR ================= */
.sidebar {
    width: 240px;
    height: 100vh;
    background: #3f6b80;
    color: white;
    padding: 20px;
    box-sizing: border-box;
    position: relative;
}

.sidebar h3 {
    text-align: center;
    margin-bottom: 50px;
    line-height: 1.5;
}

/* MENU */
.menu {
    padding: 0;
}

.menu li {
    list-style: none;
    padding: 12px;
    margin-bottom: 10px;
    border-radius: 5px;
}

.menu li.active {
    background: rgba(0,0,0,0.25);
}

/* USER */
.user {
    position: absolute;
    bottom: 20px;
}

/* ================= MAIN ================= */
.main {
    flex: 1;
    padding: 30px;
    position: relative;

    background-color: #6f8f9d;

    /* MOTIF */
    background-image: 
        radial-gradient(circle at 20% 20%, rgba(255,255,255,0.15) 2px, transparent 2px),
        radial-gradient(circle at 80% 40%, rgba(255,255,255,0.1) 2px, transparent 2px),
        radial-gradient(circle at 40% 80%, rgba(255,255,255,0.1) 2px, transparent 2px);
    background-size: 120px 120px;
}

/* GRADIENT ATAS */
.main::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 140px;

    background: linear-gradient(
        rgba(221, 55, 55, 0.4),
        rgba(255,255,255,0)
    );
}

/* BAYANGAN HEADER */
.main::after {
    content: "";
    position: absolute;
    top: 110px;
    left: 0;
    right: 0;
    height: 60px;

    background: linear-gradient(
        rgba(207, 81, 81, 0.15),
        rgba(0,0,0,0)
    );
}

/* TITLE */
.title {
    text-align: center;
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 40px;

    position: relative;
    z-index: 1;

    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
}

/* CONTAINER */
.container {
    display: flex;
    justify-content: center;
    gap: 40px;
    position: relative;
    z-index: 1;
}

/* CARD */
.card {
    width: 220px;
    background: #dcdcdc;
    border-radius: 20px;
    padding: 15px;
    text-align: center;
}

/* IMAGE */
.card img {
    width: 110px;
    height: 140px;
    object-fit: cover;
    border-radius: 10px;
    margin: 10px 0;
}

/* BUTTON INFO */
.info {
    background: #4b5a54;
    color: white;
    padding: 8px;
    border-radius: 20px;
    margin-top: 8px;
}

/* LOGOUT */
.logout {
    margin-top: 10px;
    padding: 6px 12px;
    border-radius: 20px;
    border: none;
    background: #2f4f5f;
    color: white;
}
</style>

</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h3>Sistem<br>E-Votting<br>Osis</h3>

    <ul class="menu">
        <li>Voting</li>
        <li class="active">Hasil Voting</li>
    </ul>

    <div class="user">
        Hi Alleta <br>
        <button class="logout">Log Out ⟳</button>
    </div>
</div>

<!-- MAIN -->
<div class="main">
    <div class="title">HASIL VOTING</div>

    <div class="container">

        <div class="card">
            <h3>Kandidat 1</h3>
            <img src="img1.jpg">
            <div class="info">0 orang</div>
            <div class="info">0%</div>
        </div>

        <div class="card">
            <h3>Kandidat 2</h3>
            <img src="img2.jpg">
            <div class="info">0 orang</div>
            <div class="info">0%</div>
        </div>

        <div class="card">
            <h3>Kandidat 3</h3>
            <img src="img3.jpg">
            <div class="info">0 orang</div>
            <div class="info">0%</div>
        </div>

    </div>
</div>

</body>
</html>