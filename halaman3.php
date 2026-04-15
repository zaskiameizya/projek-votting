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
  font-family: 'Inika', 'Abril Fatface', sans-serif;
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
   border-right: 2px solid black;
  color:white;
  padding:30px 20px;
  display:flex;
  flex-direction:column;
}

.sidebar h2{
  text-align:center;
  font-size: 24px;
  font-family: 'Inika';
  margin-bottom:40px;
}

.menu{
  list-style:none;
}

.menu li{
  padding:10px;
  margin-bottom:5px;
  background:rgba(255,255,255,0.1);
  cursor:pointer;
}

.menu li:hover{
  background:rgba(255,255,255,0.25);
}

.lg{
  padding:10px;
  border:none;
  border-radius:8px;
  background:#2c4f5a;
  color:white;
  cursor:pointer;
  display:flex;
  justify-content: flex-end;
}

.main{
  flex:1;
  padding:40px;
  color:white;
}

.main h1{
  text-align:center;
  margin-bottom:30px;
  font-family: 'Abril Fatface';
  font-size: 64px;
}

.card{
  display:flex;
  background: #A3B8B1;
  padding:25px;
  border-radius: 10px;
  backdrop-filter: blur(5px);
  height: 400px;
}
.box-profile{
  background-color: #ffff;
  border-radius: 5px;
  height: 300px;
}
.profile{
  width: 150px;
  text-align:center;
  margin-left: 20px;
  margin-top: 18px;
}

.profile img{
  width: 80px;
  border-radius:10px;
  margin-top: 25px;
  margin-bottom:10px;
}

.profile .name{
  font-weight:bold;
  color: black;
  font-family: 'Inika', serif;
  margin-bottom: 5px;
}

.kandidat{
  color: black;
  font-family: 'Inika', serif;
}

.visi{
  margin:30px;
}

.visi-misi .jabatan{
  font-size:14px;
  color: black;
}

.visi-misi {
  margin-left: 50px;
  font-family: 'Inika';
  margin-bottom: 0px;
}  
.visi-misi ol{
  margin-left: 55px
}

.buttons{
  margin-top:25px;
  display:flex;
  justify-content:space-between
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
      <li>Hasil Voting</li>
    </ul>
     
    <li>"logout">Log Out</li>
  </div>

  <div class="main">

    <h1>Visi/Misi Kandidat</h1>

    <div class="card">

      <div class="profile">
        <div class="box-profile">
            <img src="kandidat1.png" alt=>
            <p class="name">Cantika Lestary</p>
            <small class="kandidat">Kandidat 1 - Calon<br>Ketua OSIS</br></small>
        </div>
      </div>

      <div class="visi-misi">
          <h2 style="color: black;" >Cantika Lestary</h2>
          <p class="jabatan">Kandidat 1 - calon ketua osis</p>

        <hr>
      </div>

        <p><b>Visi:</b><br>
        “Meningkatkan Partisipasi Siswa dan Mewujudkan Sekolah yang Berprestasi”
        </p>

        <p><b>Misi:</b></p>
        <ol>
          <li>Meningkatkan keterlibatan siswa dalam kegiatan ekstrakurikuler dan organisasi sekolah.</li>
          <li>Meningkatkan prestasi akademik dan non-akademik siswa melalui program bimbingan dan pelatihan.</li>
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