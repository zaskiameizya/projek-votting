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
}


/* Judul */
.title{
  background:linear-gradient(to right,#cfd8dc,#90a4ae);
  padding:15px;
  font-size:35px;
  font-weight:bold;
  margin-bottom:40px;
}

/* Card kandidat */
.cards{
  display:flex;
  justify-content: space-evenly;
  align-items: flex-start;
  width:100px;
  padding:0 40px;
}

.card{
  background:#ddd;
  width:220px;
  padding:20px;
  border-radius:20px;
  text-align:center;
}

.card h3{
  margin-bottom:15px;
}

/* Foto */
.card img{
  width:120px;
  height:150px;
  object-fit:cover;
  border-radius:10px;
  margin-bottom:15px;
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

.btn:hover{
  background:#555;
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