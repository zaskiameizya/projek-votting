<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Sistem E-Voting OSIS</title>
  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: 'Inika', serif;
    }

    body{
      background-image: url('BG.jpeg');
      
    }

    .container{
      display:flex;
      height:100vh;
    }

    /* SIDEBAR MODIFIKASI: Menu naik ke atas */
    .sidebar{
      font-family: 'Inika', serif;
      width:150px;
      background:#4c6f7a;
      border-right: 1px solid black;
      color:white;
      padding:30px 20px;
      display:flex;
      flex-direction:column;
      justify-content:space-between; /* Menjaga jarak konten atas dan bawah */
    }

    /* Pembungkus Judul dan Menu agar berkumpul di atas */
    .top-section {
      width: 100%;
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

    /* Bagian Bawah Sidebar */
    .bottom-section {
      width: 100%;
    }

    .logout{
      font-family: 'Inika', serif;
      font-size: 15px;
      display: block;
      text-align: center; /* Diubah ke center agar lebih rapi di sidebar sempit */
      width: 100%;
      height: 30px;
      border-radius: 20px;
      background: #2c4f5a;
      color: white;
      cursor: pointer;
      border: none;
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

    /* CARD: Posisi dan Bentuk Tetap Sama */
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

    .visi-misi {
      margin-left:30px; /* Perbaikan dari margin-:30px sebelumnya */
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
</head>
<body>

<div class="container">

  <div class="sidebar">
    <div class="top-section">
      <h2>Sistem<br>E-Voting<br>Osis</h2>

      <ul class="menu">
        <li>Voting</li>
        <p>Hasil Voting</p>
      </ul>
    </div>

    <div class="bottom-section">
      <span style="display:block; margin-bottom:10px;">Hi Alletta</span>
      <button class="logout">Log Out →</button>
    </div>
  </div>

  <div class="main">

    <h1>Visi/Misi Kandidat</h1>

    <div class="card">
      <div class="profile">
        <img src="bayu-laksmana.png" alt="Foto Kandidat">
        <p class="name">Bayu Laksmana</p>
        <small>Kandidat 3 - Calon<br>Ketua OSIS</small>
      </div>

      <div class="visi-misi">
        <h2>Bayu Laksmana</h2>
        <p class="jabatan">Kandidat 3 - calon ketua osis</p>

        <p><b>Visi:</b><br>
        “Meningkatkan Kreativitas dan Inovasi Siswa”
        </p>

        <p><b>Misi:</b></p>
        <ol>
          <li> Meningkatkan apresiasi dan kreativitas siswa dalam bidang seni dan budaya.</li>
          <li> Membangun program pelatihan dan pengembangan keterampilan siswa.</li>
          <li> Meningkatkan kerja sama dengan alumni dan komunitas luar sekolah untuk</li>
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