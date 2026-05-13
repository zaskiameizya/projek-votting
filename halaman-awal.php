<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Autentifikasi Gagal</title>

<link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />

<!-- FONT INIKA -->
<link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Inika', serif;
}

body{
    width:100%;
    height:100vh;
    overflow:hidden;
    display:flex;
    justify-content:center;
    align-items:center;
    background-image:url('BG.jpeg');
    background-size:cover;
    background-position:center;
    position:relative;
}

.top-logos{
    position:absolute;
    top:20px;
    left:20px;
    display:flex;
    align-items:center;
    gap:15px;
    z-index:10;
}

.top-logos img{
    object-fit:contain;
}


.container{
    position:relative;
    width:100%;
    max-width:1200px;
    display:flex;
    justify-content:center;
    align-items:center;
}


.boxdalam{
    width:540px;
    min-height:320px;
    background:rgba(255,255,255,0.30);
    backdrop-filter:blur(7px);
    border-radius:25px;
    border:1px solid rgba(255,255,255,0.2);
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
    text-align:center;
    position:relative;
    padding:90px 40px 50px;
    z-index:2;
}


.icon-usererror{
    position:absolute;
    top:-45px;
    left:50%;
    transform:translateX(-50%);
    width:95px;
    height:95px;
    background:#1f2937;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    border:6px solid #111827;
    color:white;
    font-size:42px;
    box-shadow:0 8px 20px rgba(0,0,0,0.3);
}


h2{
    font-family:'Inika';
    font-size:36px;
    color:white;
    font-weight:700;
    margin-bottom:10px;
    text-shadow:0 3px 6px rgba(0,0,0,0.2);
}

p{
    font-family:'Inika';
    font-size:36px;
    color:white;
    font-weight:700;
    margin-bottom:35px;
    text-shadow:0 2px 4px rgba(0,0,0,0.2);
}


.btn-cobalagi{
    font-family:'Inika';
    display:inline-flex;
    align-items:center;
    gap:12px;
    padding:15px 35px;
    border-radius:12px;
    border: #201f1f solid 1px;
    border-radius: 6px;
    background: #a1adab;
    opacity: 0.9;
    color:#444;
    font-size:18px;
    font-weight:700;
    cursor:pointer;
    transition:0.3s;
    box-shadow:0 6px 15px rgba(0,0,0,0.15);
    height:45px;
}

.btn-cobalagi:hover{
    transform:translateY(-3px);
    background:#f3f4f6;
}

.btn-cobalagi i{
    font-size:22px;
}

.robot{
    margin-top: 190px;
    position:absolute;
    right: 600px;
  
    z-index:3;
}

.robot img{
    height: 450px;
}

.foto-orang{
    margin-top: 300px;
    position:absolute;
    right:40px;
    z-index:3;
}

.foto-orang img{
    height:390px;
}

@media(max-width:1100px){

    .robot{
        left:10px;
        bottom:-30px;
    }

    .foto-orang{
        right:0;
        bottom:-40px;
    }

    .robot img{
        height:250px;
    }

    .foto-orang img{
        height:300px;
    }
}

@media(max-width:850px){

    .robot,
    .foto-orang{
        display:none;
    }

    .boxdalam{
        width:90%;
        padding:80px 25px 40px;
    }

    h2{
        font-size:36px;
    }

    p{
        font-size:36px;
    }
}

</style>
</head>

<body>

    <div class="top-logos">
        <img src="logoosis.png" height="80">
        <img src="logoo.png" height="70">
    </div>

    <div class="container">

        <!-- ROBOT -->
        <div class="robot">
            <img src="robot.png" alt="">
        </div>


        <div class="boxdalam">

            <div class="icon-usererror">
                <i class="hgi hgi-stroke hgi-rounded hgi-user-remove-01"></i>
            </div>

            <h2>Autentifikasi Gagal !</h2>

            <p>NISN dan Kode salah!</p>

            <button class="btn-cobalagi"
            onclick="window.location.href='index.php'">

                <i class="hgi hgi-stroke hgi-rounded hgi-mail-reply-all-02"></i>

                COBA LAGI

            </button>

        </div>

        <!-- ORANG -->
        <div class="foto-orang">
            <img src="2smk-removebg-preview.png" alt="">
        </div>

    </div>

</body>
</html>