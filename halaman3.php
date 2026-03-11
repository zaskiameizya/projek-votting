<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #6e8c8c;
}

.container {
    display: flex;
    height: 100vh;
}

/* Sidebar */
.sidebar {
    width: 230px;
    background: #355f63;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 20px;
}

.logo h3 {
    text-align: center;
    margin-bottom: 30px;
}

.menu {
    list-style: none;
}

.menu li {
    padding: 10px;
    margin-bottom: 10px;
    cursor: pointer;
    background: #2e5256;
    border-radius: 5px;
}

.menu li.active,
.menu li:hover {
    background: #4c7c80;
}

.user {
    text-align: center;
}

.logout {
    margin-top: 10px;
    padding: 6px 12px;
    background: #2e5256;
    border: none;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

/* Main */
.main {
    flex: 1;
    padding: 40px;
}

.main h1 {
    text-align: center;
    margin-bottom: 30px;
    color: white;
}

.card {
    background: #cfd8d8;
    padding: 30px;
    border-radius: 10px;
    display: flex;
    gap: 30px;
}

.profile {
    text-align: center;
}

.profile img {
    width: 120px;
    border-radius: 5px;
}

.caption {
    margin-top: 10px;
    font-size: 14px;
}

.caption span {
    font-size: 12px;
    color: gray;
}

.content {
    flex: 1;
}

.content h2 {
    margin-bottom: 5px;
}

.sub {
    font-size: 14px;
    color: gray;
    margin-bottom: 15px;
}

.content h3 {
    margin-top: 10px;
}

.content ol {
    margin-left: 20px;
    margin-top: 5px;
}

.buttons {
    margin-top: 20px;
    display: flex;
    gap: 15px;
}

.vote {
    padding: 8px 15px;
    background: #5f6f6f;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.back {
    padding: 8px 15px;
    background: #7a7a7a;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.vote:hover {
    background: #3d4d4d;
}

.back:hover {
    background: #5a5a5a;
}
</style>
<body>
<div class="container">

    <div class="sidebar">
        <div class="logo">
            <h3>Sistem<br>E-Voting<br>Osis</h3>
        </div>

        <ul class="menu">
            <li class="active">Voting</li>
            <li>Hasil Voting</li>
        </ul>

        <div class="user">
            <p>Hi Alletta</p>
            <button class="logout">Log Out</button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main">
        <h1>Visi/Misi Kandidat</h1>

        <div class="card">
            <div class="profile">
                <img src="https://via.placeholder.com/120" alt="Foto Kandidat">
                <p class="caption">Cantika Lestary<br><span>Kandidat 1 - Calon Ketua OSIS</span></p>
            </div>

            <div class="content">
                <h2>Cantika Lestary</h2>
                <p class="sub">Kandidat 1 - calon ketua osis</p>

                <h3>Visi:</h3>
                <p>"Meningkatkan Partisipasi Siswa dan Mewujudkan Sekolah yang Berprestasi"</p>

                <h3>Misi:</h3>
                <ol>
                    <li>Meningkatkan keterlibatan siswa dalam kegiatan ekstrakurikuler dan organisasi sekolah.</li>
                    <li>Meningkatkan prestasi akademik dan non-akademik melalui program bimbingan dan pelatihan.</li>
                    <li>Membangun komunikasi yang efektif antara siswa, guru, dan staf sekolah.</li>
                </ol>

                <div class="buttons">
                    <button class="vote">✔ Voting</button>
                    <button class="back">↩ Kembali</button>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>