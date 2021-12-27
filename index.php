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
                            <a class="nav-link" href="#Juz_Amma">Juz Amma</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sosial_feed">Sosial Feed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about_us">About us</a>
                        </li>

                    </ul>
                  
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

    <!-- Juz Amma -->

    <div class="container" id="Juz_Amma">
        <div class="mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-6 animasi" id="gambar">
                    <img src="https://images.unsplash.com/photo-1589995635011-078e0bb91d11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHF1cmFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="img-fluid rounded-start" alt="...">
                </div>
                <div class=" col-md-5 text-center">
                    <h5 class="card-title fs-1">Juz Amma</h5>
                    <p class="card-text fs-6">Juz ke-30 berisikan surat-surat pendek yang sering dibaca saat menunaikan ibadah shalat. Juz ke-30 ini disebut sebagai Juz Amma. Juz Amma memiliki total 37 surat dengan 564 ayat. Surat yang ada pada Juz Amma ini kebanyakan turun di Kota Mekkah.</p>
                    <a href="#"><button type="button" class="btn btn-outline-dark">Mulai Membaca</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- akhir -->

    <!-- sosial feed -->
    <div class="container">
        <div class="text-center animasi" id="sosial_feed">

            <div class="card-body">
                <h5 class="card-title fs-1">Sosial Feed</h5>
                <p class="card-text fs-6">Follow, like, dan share sosial media @myquranbest yang berisi pesan kebaikan dalam desain yang menarik.</p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100" style="background-color: #74c328; color: white;">
                            <img src="https://scontent.fpku4-1.fna.fbcdn.net/v/t1.6435-9/p526x296/65287058_10157680715627518_6975553163931680768_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=730e14&_nc_eui2=AeGyoauLHUdJOREl8zhiKnumrUB2gzhNT0itQHaDOE1PSMqhh2G1hm07WsW805JC9uspN1Z3If9syCgg2b9CpDFd&_nc_ohc=TAmys6VhLgMAX8kqJH-&_nc_ht=scontent.fpku4-1.fna&oh=00_AT-BJJadUFjBjynNUZ89NhunUfTxyZJh2DT7rC8uEdhwRQ&oe=61EEC469" class="card-img-top" alt="...">
                            <div class="card-body text-start">
                                <h4 class="card-title">Ingat Allah Hati Tentram</h4>
                                <small class="text">19 Jan 2019</small>

                                <p class="card-text">Kala gundah mendera, ingatlah Allah. Hanya dengan mengingatnya, hatimu akan menjadi tentram. Bismillah</p>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://i.pinimg.com/564x/11/f0/e4/11f0e41d7954606a1362b2f4349b68d0.jpg" class="card-img-top" alt="...">
                            <div class="card-body text-start">
                                <h4 class="card-title" style="color: #414c5a;">Dunia adalah kesenangan yang memperdaya</h4>
                                <small class="text-muted">19 Jan 2019</small>
                                <p class="card-text text-muted">Dunia itu hanya mampir untuk minum. Hanya sebentar, sementara. Dunia adalah tempat untuk beramal...</p>

                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" style="background-color: #fe60a1;color: white;">
                            <img src="https://d265bwk65zoq6.cloudfront.net/images/full/d08c81d6f04d0740981e1165eb0a9919f8bcf5ac_1068x1068.jpg" class=" card-img-top" alt="...">
                            <div class="card-body text-start">
                                <h4 class="card-title">Menghilangkan segala kesusahan</h4>
                                <small class="text">19 Jan 2019</small>
                                <p class="card-text">Cukuplah Allah, tiada yang lain</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- sosial feed -->

    <!-- footer -->
    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-facebook"></i></a>

                <!-- Twitter -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-instagram"></i></a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="#">Hadiid Andri Yulison</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- akhir footer -->



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="dist/js/script.js"></script>

</html>