<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>E-Voting OSIS</title>

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

.sidebar{
    width:150px;
    height:100vh;
    background:rgba(255,255,255,0.1);
    position:fixed;
    left:0;
    top:0;
    color:white;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    z-index:2;
}

.logo{
    text-align:center;
    margin-top:30px;
    font-size:20px;
    font-weight:bold;
    line-height:40px;
}

.menu{
    margin-top:40px;
}

.menu a{
    display:block;
    color:white;
    text-decoration:none;
    text-align:center;
    padding:15px;
    font-size:18px;
    font-weight:bold;
}

.menu a:hover{
    background:#29536b;
}

/* BOTTOM */
.bottom{
    text-align:center;
    margin-bottom:30px;
}

.bottom h2{
    font-size:18px;
    margin-bottom:15px;
}

.logout{
    display:inline-block;
    background:#173547;
    color:white;
    padding:10px 20px;
    border-radius:25px;
    text-decoration:none;
    font-weight:bold;
}

/* CONTENT */
.content{
    margin-left:150px;
    width:calc(100% - 150px);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    position:relative;
}

.nav-item {
            padding: 15px 25px;
            cursor: pointer;
            display: block;
            text-decoration: none;
            color: #fbfcfd;
            background:rgba(255,255,255,0.1);
        }

        .nav-item2{
         padding: 15px 25px;
         cursor:pointer;
         color: white;
         text-decoration: none;
        }

/* BOX */
.card{
    width:550px;
    height:240px;
    background:#698D9F;
    border-radius:10px;
    text-align:center;
    padding-top:50px;
    position:relative;
    z-index:2;
}

.card h1{
    color:white;
    font-size:24px;
    line-height:42px;
    font-weight:bold;
}

/* BUTTON */
.btn{
    margin-top:15px;
    background:#5c6159;
    color:white;
    border-radius:18px;
    padding:12px 28px;
    font-size:18px;
    font-weight:bold;
    cursor:pointer;
}

.btn:hover{
    background:#4b4f48;
}

/* IMAGE */
.students{
    position:absolute;
    left:90px;
    bottom:0;
    width:340px;
    z-index:3;
}

</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <div>

        <div class="logo">
            Sistem<br>
            E-Voting<br>
            Osis
        </div>

        <div class="nav-menu">
            <a href="#" class="nav-item">Voting</a>
            <a href="#" class="nav-item2">Hasil Voting</a>
        </div>

    </div>

    <div class="bottom">
        <h2>Hi Alletta</h2>

        <a href="#" class="logout">
            Log Out ↪
        </a>
    </div>

</div>

<!-- CONTENT -->
<div class="content">

    <div class="card">

        <h1>
            Pilihan anda sudah kami simpan,<br>
            Terima kasih sudah berpartisipasi<br>
            dalam voting ini.
        </h1>

        <button class="btn" onclick="window.location.href='index.php'">KEMBALI KE HALAMAN LOGIN</button>

    </div>

    
    <img src="dua-orang.png" class="students">

</div>

</body>
</html>