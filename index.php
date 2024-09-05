<?php
  date_default_timezone_set("Asia/Bangkok")
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Bootstrap V5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Logo -->
    <link rel="icon" href="Logo Batara Jumbotron.png" />
    <title>Batara | Akses</title>
  </head>
  <body>
    <div class="jumbotron">
      <!-- Navbar Start -->
      <nav class="navbar navbar-dark bg-primary d-flex justify-content-start fixed-top">
        <div class="navbar-wrapper">
          <div class="logo"><img src="Logo Batara Jumbotron.png" alt="logo_batara"></div>
        </div>
        <div class="font-txt animate__animated animate__swing animate__slow animate__infinite" height="50px" style=""><a class="branding fw-bolder text-warning">BATARA</a></div>
        <div class="navbar-2">
          <ul class="nav-wrap">
            <li class="nav-item">
              <a href="#home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#kegiatan" class="nav-link">Kegiatan</a>
            </li>
            <li class="nav-item">
              <a href="#tentang" class="nav-link">Tentang</a>
            </li>
            <li class="nav-item">
              <a href="#pendaftaran" class="nav-link">Pendaftaran</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Section Home Start -->
      <div class="home" id="home">
        <div class="hero-image animate__animated animate__fadeIn"></div>

        <h1 class="hero-title text-primary fw-bolder animate__animated animate__fadeInUp animate__delay-1s">Barisan Taruna Karya</h1>
        <h5 class="desc-title fw-light text-secondary animate__delay-2s animate__animated animate__fadeIn">Batara merupakan organisasi karang taruna yang diisi oleh para pemuda-pemudi dari RT010 RW015 Perumahan Mega Regency Blok D</h5>
        <a class="button-title fw-bold animate__animated animate__fadeIn animate__delay-2s" href="#pendaftaran">Daftar Sekarang</a>
      </div>
      <!-- Section Home End -->

      <!-- Section Kegiatan Start -->
      <div class="kegiatan" id="kegiatan">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#ffffff"
            fill-opacity="1"
            d="M0,128L60,112C120,96,240,64,360,80C480,96,600,160,720,186.7C840,213,960,203,1080,176C1200,149,1320,107,1380,85.3L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
          ></path>
        </svg>

        <h1 class="title-kegiatan text-light fw-bolder text-center">Kegiatan Batara</h1>

        <div class="card-container d-flex justify-content-around">
          <div class="card">
            <img src="17 agustus.jpeg" class="card-img-top" alt="batara_17_agustus" />
            <!-- image ratio 3:2 -->
            <div class="card-body">
              <h5 class="card-title text-dark fw-bold">17 Agustus</h5>
              <p class="card-text lh-sm fw-light">Barisan Taruna Karya ikut berkontribusi dalam kegiatan 17 Agustusan di lingkungan RT 010 sebagai penanggung jawab perlombaan untuk kategori anak-anak</p>
              <a href="https://drive.google.com/drive/folders/1ElR68W79viHA9PttBq8KrfvMCE1HvpbA?usp=sharing" class="card-button btn btn-primary">get photo</a>
            </div>
          </div>
          <div class="card">
            <img src="malam puncak.jpeg" class="card-image card-img-top" alt="batara_17_agustus" />
            <!-- image ratio 3:2 -->
            <div class="card-body">
              <h5 class="card-title text-dark fw-bold">Malam Puncak</h5>
              <p class="card-text lh-sm fw-light">Barisan Taruna Karya ikut berkontribusi dalam kegiatan Malam Puncak di lingkungan RT 010</p>
              <a href="https://drive.google.com/drive/folders/1WZ1gZOJyaLlDeU_nofK_C2cw6oE6ykcd?usp=sharing" class="card-button btn btn-primary">get photo</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Section Kegiatan End -->

      <!-- Section Tentang Start -->
      <div class="tentang" id="tentang">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#0d6efd"
            fill-opacity="1"
            d="M0,96L7.7,128C15.5,160,31,224,46,229.3C61.9,235,77,181,93,149.3C108.4,117,124,107,139,112C154.8,117,170,139,186,144C201.3,149,217,139,232,165.3C247.7,192,263,256,279,266.7C294.2,277,310,235,325,224C340.6,213,356,235,372,234.7C387.1,235,403,213,418,197.3C433.5,181,449,171,465,181.3C480,192,495,224,511,224C526.5,224,542,192,557,170.7C572.9,149,588,139,604,160C619.4,181,635,235,650,224C665.8,213,681,139,697,90.7C712.3,43,728,21,743,48C758.7,75,774,149,790,154.7C805.2,160,821,96,836,101.3C851.6,107,867,181,883,192C898.1,203,914,149,929,133.3C944.5,117,960,139,975,154.7C991,171,1006,181,1022,170.7C1037.4,160,1053,128,1068,138.7C1083.9,149,1099,203,1115,234.7C1130.3,267,1146,277,1161,277.3C1176.8,277,1192,267,1208,256C1223.2,245,1239,235,1254,208C1269.7,181,1285,139,1301,117.3C1316.1,96,1332,96,1347,122.7C1362.6,149,1378,203,1394,229.3C1409,256,1425,256,1432,256L1440,256L1440,0L1432.3,0C1424.5,0,1409,0,1394,0C1378.1,0,1363,0,1347,0C1331.6,0,1316,0,1301,0C1285.2,0,1270,0,1254,0C1238.7,0,1223,0,1208,0C1192.3,0,1177,0,1161,0C1145.8,0,1130,0,1115,0C1099.4,0,1084,0,1068,0C1052.9,0,1037,0,1022,0C1006.5,0,991,0,975,0C960,0,945,0,929,0C913.5,0,898,0,883,0C867.1,0,852,0,836,0C820.6,0,805,0,790,0C774.2,0,759,0,743,0C727.7,0,712,0,697,0C681.3,0,666,0,650,0C634.8,0,619,0,604,0C588.4,0,573,0,557,0C541.9,0,526,0,511,0C495.5,0,480,0,465,0C449,0,434,0,418,0C402.6,0,387,0,372,0C356.1,0,341,0,325,0C309.7,0,294,0,279,0C263.2,0,248,0,232,0C216.8,0,201,0,186,0C170.3,0,155,0,139,0C123.9,0,108,0,93,0C77.4,0,62,0,46,0C31,0,15,0,8,0L0,0Z"
          ></path>
        </svg>
        <h1 class="title-tentang text-primary fw-bolder text-center">Tentang Batara</h1>

        <p class="p-kegiatan fs-4 fw-light">
          Barisan Taruna Karya pertama kali dibentuk dengan nama Tarka, dibawah tangan keRTan periode sebelumnya dengan anggotanya yang kini menjadi senior di dalam organisasi Batara. Di tahun 2023 Tarka kembali dibentuk dengan nama baru
          yaitu Barisan Taruna Karya oleh keRTan periode saat ini dan tentunya dengan tim yang baru. Mulanya, Batara beranggotakan kurang lebih 50 orang, namun saat ini hanya tersisa sekitar 30 anggota yang tergabung dalam organisasi
          Batara.
        </p>
      </div>
      <!-- Section Tentang End -->  

      <!-- Section Pendaftaran Start -->
      <div class="pendaftaran" id="pendaftaran">
        <h1 class="h1-pendaftaran text-light text-center">Social Media Batara</h1>

        <div class="form-action">
          <!-- <div class="leftside">
            <form action="process.php" method="post">
              <h5 class="text-light">Nama Lengkap</h5>
              <input class="input-type" type="text" name="namaLengkap" placeholder="Contoh: Ahmad Maulana Zuhdi" required />
              <h5 class="text-light">Umur</h5>
              <input class="input-type" type="text" name="umur" id="" placeholder="Contoh: 19" required />
              <h5 class=text-light>Jenis Kelamin</h5>
              <input class="radio" type="radio" name="jenisKelamin" value="Pria"><a class="text-light" style="text-decoration: none; padding-left: 5px; padding-right: 15px;">Pria</a>
              <input class="radio" type="radio" name="jenisKelamin" value="Wanita"><a class="text-light" style="text-decoration: none; padding-left: 5px">Wanita</a>
              <div class="alamat">
                <div class="alamat-alamat">
                  <h5 class="text-light">Alamat</h5>
                  <input class="input-type-alamat" type="text" name="alamat" placeholder="Contoh: Mega Regency, D danau, gang ..." required />
                </div>
                <div class="rt">
                  <h5 class="text-light">RT</h5>
                  <input class="input-sh" type="text" placeholder="10"  name="rt" required />
                </div>
                <div class="rt">
                  <h5 class="text-light">RW</h5>
                  <input class="input-sh" type="text" name="rw" placeholder="15" required />
                </div>
              </div>
              <h5 class="text-light">No. Telp</h5>
              <input class="input-type" type="text" name="nomor" placeholder="Contoh: 08xxxxxxxxxx" required /> <br />
              <button class="submit-input fw-bolder" type="submit" name="submit" value= <?php echo date("h:i:sa"); ?>>Kirim</button>
            </form>
          </div> -->

          <div class="rightside">
            <!-- <h2 class="text-center text-light">Social Media</h2> -->

            <div class="card2-container d-flex justify-content-evenly">
              <div class="card-medsos">
                <div class="medsos-img img1"><img src="instagram.png" alt="instagram_batara" width="120px" /></div>
                <div class="link-link"><a class="medsos-link fw-bold" href="https://www.instagram.com/batara10_/">Instagram</a></div>
              </div>
              <div class="card-medsos">
                <div class="medsos-img img2"><img src="tik-tok.png" alt="tiktok_batara" width="120px" /></div>
                <div class="link-link"><a class="medsos-link fw-bold" href="https://www.tiktok.com/@batara10_">Tiktok</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Section Pendaftaran End -->
    </div>
  </body>
</html>
