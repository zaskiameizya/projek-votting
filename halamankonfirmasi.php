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
  background: #A3B8B1;
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
  background:white; 
  padding:5px; 
}

.profile .name{
  font-weight:bold;
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

.overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.5);
  justify-content: center;
  align-items: center;
}

.modal {
  background: #6f8c9c;
  padding: 20px;
  border-radius: 10px;
  width: 350px;
  text-align: center;
  border: 2px solid black;
  color: black;
}

.modal p {
  margin-bottom: 20px;
  font-size: 16px;
}

.modal button {
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  margin: 5px;
  cursor: pointer;
}

.btn-simpan {
  background: #2c3e50;
  color: white;
}

.btn-batal {
  background: #34495e;
  color: white;
}
</style>
</head>

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
        <img src="alya-azzahra.png" alt="">
        <p class="name">Alya Azzahra</p>
        <small>Kandidat 2 - Calon<br>Ketua OSIS</small>
      </div>

      <div class="visi-misi">
        <h2>Alya Azzahra</h2>
        <p class="jabatan">Kandidat 2 - calon ketua osis</p>

        <p><b>Visi:</b><br>
        “Membangun Sekolah yang Ramah dan Inklusif”
        </p>

        <p><b>Misi:</b></p>
        <ol>
          <li>Meningkatkan kesadaran dan kepedulian siswa terhadap isu-isu sosial dan lingkungan.</li>
          <li>Membangun lingkungan sekolah yang aman dan nyaman bagi semua siswa.</li>
          <li>Meningkatkan partisipasi siswa dalam kegiatan sukarela dan bakti sosial.</li>
        </ol>
      </div>

    </div>

    <div class="buttons">
      <button class="vote" onclick="bukaModal()">✔ Voting</button>
      <button class="back">↩ Kembali</button>
    </div>

  </div>

</div>

<div class="overlay" id="modalBox">
  <div class="modal">
    <p>
      <b>Yakin dengan pilihan anda?</b><br><br>
      Setelah klik “Simpan”,<br>
      pilihan anda tidak dapat di ubah.
    </p>

    <button class="btn-simpan">SIMPAN</button>
    <button class="btn-batal" onclick="tutupModal()">BATAL</button>
  </div>
</div>

<script>
function bukaModal() {
  document.getElementById("modalBox").style.display = "flex";
}

function tutupModal() {
  document.getElementById("modalBox").style.display = "none";
}
</script>

</body>
</html>