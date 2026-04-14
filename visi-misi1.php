<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Sistem E-Voting OSIS</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body{
  background-image: url('BG.jpeg');
}

.container{
  display:flex;
  height:100vh;
}

.sidebar{
  width:150px;
  background:#4c6f7a;
  color:white;
  padding:30px 20px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
}

.sidebar h2{
  text-align:center;
  font-size:20px;
  margin-bottom:40px;
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

.main{
  flex:1;
  padding:40px;
  color:white;
}

.main h1{
  text-align:center;
  margin-bottom:30px;
}

.card{
  display:flex;
  background:rgba(255,255,255,0.15);
  padding:25px;
  border-radius:12px;
  backdrop-filter: blur(5px);
}

.profile{
  width:200px;
  text-align:center;
}

.profile img{
  width:130px;
  border-radius:10px;
  margin-bottom:10px;
}

.profile .name{
  font-weight:bold;
}

.visi{
  margin-:30px;
}


.visi-misi .jabatan{
  font-size:14px;
  margin-bottom:15px;
  color:#ddd;
}

.visi-misi ol{
  margin-left:20px;
}

.buttons{
  margin-top:25px;
  display:flex;
  justify-content:space-between;
}

.vote{
  background:#7a8c92;
  border:none;
  padding:12px 30px;
  border-radius:8px;
  color:white;
  cursor:pointer;
}

.back{
  background:#7a8c92;
  border:none;
  padding:12px 30px;
  border-radius:8px;
  color:white;
  cursor:pointer;
}

.vote:hover,
.back:hover{
  background:#5f737a;
}
</style>
<body>
<div class="container">

  <div class="sidebar">
    <h2>Sistem<br>E-Voting<br>Osis</h2>

    <ul class="menu">
      <li>Voting</li>
      <p>Hasil Voting</p>
    </ul>

    <button class="logout">Log Out</button>
  </div>

  <div class="main">

    <h1>Visi/Misi Kandidat</h1>

    <div class="card">

      <div class="profile">
        <img src="cantika.png" alt=>
        <p class="name">Cantika Lestary</p>
        <small>Kandidat 2 - Calon<br>Ketua OSIS</br></small>
      </div>

      <div class="visi-misi">
        <h2>Cantika Lestary</h2>
        <p class="jabatan">Kandidat 2 - calon ketua osis</p>

        <p><b>Visi:</b><br>
        “Meningkatkan Partisipasi Siswa dan Mewujudkan Sekolah yang Berprestasi”
        </p>

        <p><b>Misi:</b></p>
        <ol>
          <li> Meningkatkan keterlibatan siswa dalam kegiatan ekstrakurikuler dan organisasi sekolah.</li>
          <li>MMeningkatkan prestasi akademik dan non-akademik siswa melalui program bimbingan dan pelatihan.</li>
          <li>Membangun komunikasi yang efektif antara siswa, guru, dan staf sekolah.</li>
        </ol>
      </div>

    </div>

    <div class="buttons">
      <button class="vote">✔ Voting</button>
      <button class="back">↩ Kembali</button>
    </div>

  </div>

</div>

</body>
</html>