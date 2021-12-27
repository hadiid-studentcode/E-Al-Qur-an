<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="icon" href="dist/image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>E-Alquran</title>
</head>

<body>


    <div class="header">
        <!-- navbar -->
        <nav class=" container navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="dist/image/logo.png" alt="" height="50"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#fitur_utama">Fitur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mushaf</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Sosial Feed</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- akhir navbar -->
        <!-- beranda -->
        <div class="container animasi" id="beranda">
            <div class=" mb-3 text-center" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-7"><br><br><br><br>
                        <div class="card-body col-12 ">
                            <h1 class="card-title fs-1 ">Al Quran Digital #1</h1>

                            <p class="card-text col-md-12 fs-5">Al Quran Digital terbaik dengan desain yang menarik,
                                penulisan khat yang rapi, dilengkapi dengan tajwid berwarna yang
                                memberi kemudahan dalam membaca Al Quran, serta pengingat waktu sholat yang akurat.</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://quranbest.com/frontend/img/mockups/applify-mockup-2-lg.png" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir beranda -->
    </div>

    <!-- fitur utama -->
    <div class="text-center animasi" id="fitur_utama">

        <div class="card-body">
            <h5 class="card-title fs-1">Fitur Utama</h5>
            <p class="card-text fs-5">Menyajikan pengalaman baru dalam berinteraksi dengan <br> Al Quran Digital.</p>

        </div>
        <br><br><br>
    </div>
    <div class="container">
        <div class="mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-6 animasi" id="gambar">
                    <img src="https://quranbest.com/frontend/img/device-slider//KENYAMANAN.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class=" col-md-5 text-end">
                    <div class="card-body text-start">
                        <button type="button" class="btn btn-primary btn-sm" onclick="nyaman()">KENYAMANAN</button>
                        <button type="button" class="btn btn-primary btn-sm" onclick="dukung()">DUKUNGAN</button>
                        <button type="button" class="btn btn-primary btn-sm" onclick="aktif()">INTERAKTIF</button>
                        <br><br>
                        <div class="tampil animasi " id="tampil">
                            <p class="card-text keterangan">Kenyamanan membaca Al Quran Digital yang belum pernah anda
                                rasakan sebelumnya</p>

                            <h5 class="card-text text-start" id="deskripsi">
                                <i class="bi bi-check-circle-fill"></i> Tampilan seperti Al Quran cetak
                            </h5>
                            <h5 class="card-text text-start" id="deskripsi">
                                <i class="bi bi-check-circle-fill"></i> Pembatas halaman yang cantik
                            </h5>
                            <h5 class="card-text text-start" id="deskripsi">
                                <i class="bi bi-check-circle-fill"></i> Tajwid berwarna sesuai standar Indonesia
                            </h5>
                            <h5 class="card-text text-start" id="deskripsi">
                                <i class="bi bi-check-circle-fill"></i> Pengaturan audio murottal mp3 Al Quran
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir -->

    <!-- mushaf -->
    <div class="text-center animasi" id="fitur_utama">

        <div class="card-body">
            <h5 class="card-title fs-1">Mushaf Al Quran</h5>
            <p class="card-text fs-5">Al- Fatiah</p>

        </div>
        <br><br><br>
    </div>

    <!-- al fatihah -->
    <?php include 'dist/juzzAmma/Al-fatihah/Al-fatihah.php' ?>
    <!-- akhir -->


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="dist/js/script.js"></script>

</html>