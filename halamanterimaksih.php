<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>E-Voting</title>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #6dd5ed, #2193b0);
    }

    /* layout utama */
    .container {
      display: flex;
      height: 100vh;
    }

    /* sidebar kiri */
    .sidebar {
      width: 220px;
      background: rgba(0, 0, 0, 0.4);
      color: white;
      padding: 20px;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .menu {
      margin: 15px 0;
      padding: 10px;
      border-radius: 10px;
      cursor: pointer;
    }

    .menu:hover {
      background: rgba(255,255,255,0.2);
    }

    .logout {
      margin-top: 50px;
      background: #2c4f5a;
      text-align: center;
      padding: 10px;
      border-radius: 10px;
    }

    /* konten kanan */
    .content {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* box tengah */
    .box {
      background: white;
      padding: 30px;
      width: 350px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    .box h2 {
      color: #1a2a44;
      margin-bottom: 10px;
    }

    .box p {
      color: #333;
      font-weight: bold;
    }

    /* tombol bawah */
    .buttons {
      margin-top: 20px;
    }

    .btn {
      padding: 10px 20px;
      margin: 5px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }

    .btn-simpan {
      background: #4CAF50;
      color: white;
    }

    .btn-batal {
      background: #888;
      color: white;
    }

  </style>
</head>
<body>

  <div class="container">

    <!-- Sidebar -->
    <div class="sidebar">
      <h2>E-Voting</h2>

      <div class="menu">Voting</div>
      <div class="menu">Hasil Voting</div>

      <div class="logout">Log Out</div>
    </div>

    <!-- Konten -->
    <div class="content">
      <div class="box">
        <h2>Autentifikasi Gagal!</h2>
        <p>NISN dan Kode salah!</p>

        <div class="buttons">
          <button class="btn btn-simpan">SIMPAN</button>
          <button class="btn btn-batal">BATAL</button>
        </div>
      </div>
    </div>

  </div>

</body>
</html>