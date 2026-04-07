<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* posisi kotakan dalam */
    overflow: hidden;
    background-image: url('BG.jpeg');
}

.container{
  display:flex;
  height:100vh;
}

.sidebar{
  width:140px;
  background:#4c6f7a;
  color:white;
  padding:50px 20px;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  margin-right: 843px;
}

.sidebar h2{
  text-align:center;
  font-size:20px;
  margin-bottom:40px;
  margin-right: 10px;
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

.boxdalam {
    background-color: #a5c3e6; 
    padding: 50px;
    border-radius: 20px;
    text-align: center;
    width: 500px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    margin-left:100px;
}

h2 {
    color: #1a2a44;
    margin-bottom: 10px;
    font-size: 24px;
}

p {
    color: #333;
    font-weight: bold;
    margin-bottom: 25px;
}
</style>
<body>
  <div class="boxdalam">
     <h2>Autentifikasi Gagal!</h2>
            <p>NISN dan Kode salah!</p>
</div>
  <div class="container">

  <div class="sidebar">
    <h2>Sistem<br>E-Voting<br>Osis</h2>

    <ul class="menu">
      <li>Voting</li>
      <p>Hasil Voting</p>
    </ul>

    <button class="logout">Log Out</button>

  </div>
  
</body>
</html>