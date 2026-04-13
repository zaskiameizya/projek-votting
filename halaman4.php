<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Daftar Kandidat</title>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body{
  background: url('8c0eb8ec-b5a2-4955-b414-4ba47618232a.jpg');
}

/* Layout utama */
.container{
  display:flex;
  height:100vh;
}

/* Sidebar */
.sidebar{
  width:200px;
  background:#4c6f7a;
  color:white;
  padding:30px 15px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
}

.sidebar h2{
  text-align:center;
  line-height:1.5;
}

.menu{
  list-style:none;
  width: 100%;
  background: white:
  text-align: center:
  padding: 15px 0;
  margin: 0;
}

.menu li{
  padding:12px;
  margin:8px 0;
  background:rgba(255,255,255,0.1);
  border-radius:8px;
  cursor:pointer;
  text-align:center;
}

.menu li:hover{
  background:rgba(255,255,255,0.3);
}

.logout{
  padding:10px;
  border:none;
  border-radius:8px;
  background:#2c4f5a;
  color:white;
  cursor:pointer;
}

/* Main */
.main{
  flex:1;
  padding:30px;
  text-align:center;
  margin-bottom: -30px;
}


/* Judul */
.title{
  background:linear-gradient(to right,#cfd8dc,#90a4ae);
  padding:15px;
  font-size:35px;
  font-weight:bold;
  width:100%;
  margin:0;
  border-radius:0;
}

.cards{
  display:flex;
  justify-content:center;
  gap:100px;
  max-width:1200px;
  margin:200px;
}

.card{
  background:#e6e6e6;
  width:300px;
  padding:25px;
  border-radius:25px;
  text-align:center;
  box-shadow:0 10px 25px rgba(0,0,0,0.25);
  transition:0.3s;
}

.card img{
  width:140px;
  height:auto;
  margin:15px 0;
}

.card h3{
  margin-bottom:10px;
}

/* Tombol */
.btn{
  background:#6d6d6d;
  color:white;
  border:none;
  padding:10px 20px;
  border-radius:10px;
  cursor:pointer;
}



</style>
</head>

<body>

<div class="container">

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Sistem<br>E-Voting<br>Osis</h2>

    <ul class="menu">
      <li>Voting</li>
      <li>Hasil Voting</li>
    </ul>

    <button class="logout">Log Out</button>
  </div>

  <!-- Main -->
  <div class="main">

    <div class="title">DAFTAR KANDIDAT</div>

    <div class="cards">

     
      <div class="card">
        <h3>Kandidat 1</h3>
        <img src="WhatsApp_image_2026-01-12_at_14.10.14-removebg-preview.png">
        <br>
        <button class="btn">Details</button>
      </div>

      
      <div class="card">
        <h3>Kandidat 2</h3>
        <img src="WhatsApp_image_2026-01-12_at_14.12.02-removebg-preview.png">
        <br>
        <button class="btn">Details</button>
      </div>

      
      <div class="card">
        <h3>Kandidat 3</h3>
        <img src="WhatsApp_image_2026-01-12_at_14.15.09-removebg-preview.png">
        <br>
        <button class="btn">Details</button>
      </div>

    </div>

  </div>

</div>

</body>
</html>