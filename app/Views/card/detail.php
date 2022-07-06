<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= $title; ?></title>

    <!-- assets -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="/assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="/assets/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="/assets/css/seminar.css">
    <!-- assets -->

    <!-- assets 2 -->
    <link rel="stylesheet" href="/assets2/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;display=swap">
    <!-- assets 2 -->

    <!-- favicon -->
    <link rel="icon" type="image/gif" href="/assets/img/tech/Logo_Gundar.png">
    <!-- favicon -->
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container">
            <a class="navbar-brand logo" href="/" id="purple">
                <img style="width: 60px;" src="/assets/img/tech/Logo_Gundar.png">
                <strong>Universitas Gunadarma</strong>
            </a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/card/download">Downloads</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <header class="text-center text-white masthead">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">Explore our seminar</h1>
                <h2 class="masthead-subheading mb-0">here!</h2>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>

    <div class="container-fluid">
        <div class="container">
            <div class="row pb-5 header-min-height">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-3 col-sm-5 col-md-4 mb-sm-7" id="seminarCover">
                            <div class="wrapper-kelas rounded shadow minus-top logo-center white-bg" >
                                <img src="/assets/img/scenery/cover/<?= $card['gambar']; ?>" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-7 col-md-8 pt-3 pl-xl-4 pl-lg-5 pl-sm-4">
                            <span class="seminarStyle">Seminar</span>
                            <h2 id="title"><?= $card['nama']; ?></h2>
                            <small class="text-muted d-block mb-3">
                                Diselenggarakan oleh: <?= $card['narasumber']; ?>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 pt-5 text-left">
                    <span class="text-muted d-block mt-3 mb-2">Terbuka Hingga:</span>
                    <b><?= $card['periode']; ?></b><br>
                    <b id="timing"></b>
                    <span class="text-muted d-block mt-3 mb-2">Maks Kuota:</span>
                    <b><?= $card['kuota']; ?></b>
                </div>
            </div>
        </div>
    </div>
  
<!-- tabbed -->
    <div class="container-fluid">
        <div class="container">
            <div class="tab-menu-detail">
                <div class="tab-wrapper">
                    <nav class="nav nav-tabs list mt-2" id="myTab">
                        <a class="nav-item nav-link active" href="#" role="tab">
                            Deskripsi
                        </a>
                    </nav>
                </div>
            </div>    
            <div class="tab-content pt-5" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row tab-content-detail">
                        <div class="col-lg-9 order-lg-1 order-2 col-lg-push-3 pr-lg-5">
                            <h3>Deskripsi</h3>
                            <div class="fr-view mb-5">
                                <h3 dir="ltr">
                                    <img src="/assets/img/scenery/cover/<?= $card['gambar']; ?>" class="img-fluid">
                                </h3>
                                <h3 dir="ltr">
                                    <strong>Informasi:</strong>
                                </h3>
                                <hr>
                                <p dir="ltr">
                                    <?= $card['deskripsi']; ?>
                                </p>
                                <p dir="ltr">
                                    Mari bergabung bersama dengan <strong><?= $card['narasumber']; ?></strong> dengan tema
                                    <strong>"<?= $card['nama']; ?>"</strong>
                                </p>
                                <hr>
                                <h3 dir="ltr">
                                    <strong>Rundown acara:</strong>
                                </h3>
                                <p dir="ltr">
                                    09.00 - 09.10 : Pembukaan oleh moderator <strong><?= $card['mc']; ?></strong>.
                                    <br>
                                    09.10 - 09.30 : Pembahasan materi oleh pembicara <strong><?= $card['narasumber']; ?></strong>dengan materi "<strong><?= $card['nama']; ?></strong>".
                                    <br>
                                    09.30 - 10.00 : Q & A dan Penutup.</p>
                                <hr>
                                <p>
                                    <strong><span style="font-size:24px;">FAQ:</span></strong>
                                </p>
                                <p>
                                    1. Apakah setelah mendaftar dan mendapat tiket saya perlu mendaftar ulang (scan QR Code) saat acara berlangsung?
                                    <br>
                                    <em>
                                        Jawab: Kamu tidak perlu mendaftar ulang (scan QR Code), silakan langsung kunjungi live streaming
                                    </em>
                                </p>
                                <p>
                                    2. Apakah saya bisa mendapatkan sertifikat, slide presentasi dan rekaman video setelah acara berlangsung?
                                    <br>
                                    <em>Jawab: Sertifikat, slide presentasi dan rekaman video akan tersedia di halaman event
                                    <a href="#" style="text-decoration: none;">dokumentasi</a> maksimal 7 hari kerja setelah event berlangsung.</em>
                                </p>
                                <p>
                                    3. Hubungi kami sebagai penitia pada nomor dibawah
                                    <br>
                                    <em><?= $card['kontak']; ?></em>
                                </p>
                                <a href="/ShowCard/card_find" class="btn btn-success">Back to List</a>
                            </div>                                                                                        
                        </div>

                        <div class="col-lg-3 order-lg-2 order-1 pl-lg-4 mb-5 event-info">
                            <div class="d-registration mb-5">
                                <div class="text-for-element">Keikutsertaan</div>
                                <p>Silakan mendaftar untuk mengikuti seminar sebagai peserta</p>
                                
                                <a href="/pendaftar/daftar" id="href">
                                    <button dbuttonta-toggle="modal" class="btn" id="daftar" name="btn-daftar">Daftar</button>
                                </a>
                            </div>
                            <div class="mb-5">
                                <div class="text-for-element">Jadwal Pelaksanaan</div>
                                <div class="row">
                                    <div class="col-sm-3">Mulai</div>
                                    <div class="col-sm-9">: <?= $card['mulai']; ?> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">Selesai</div>
                                    <div class="col-sm-9">: <?= $card['selesai']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- tabbed -->

    <!-- footer start -->
    <footer class="page-footer dark" style="text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h5>Get started</h5>
                    <ul>
                        <a href="/">Home</a><br>
                        <a href="Pages/contact">Contact Us</a>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h5>About UG</h5>
                    <ul>
                        <a href="https://www.gunadarma.ac.id/">Information</a><br>
                        <a href="http://ugpedia.gunadarma.ac.id/pdf/439.pdf">Locations</a>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h5>Support</h5>
                    <ul>
                        <a href="http://bapsi.gunadarma.ac.id/">FAQ</a><br>
                        <a href="http://bapsi.gunadarma.ac.id/helpdesk2/">Help desk</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2022 Copyright</p>
        </div>
    </footer>
    <!-- footer end -->
    
    <!-- assets -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="/assets/js/vanilla-zoom.js"></script>
    <script src="/assets/js/theme.js"></script>
    <!-- assets -->

    <!-- assets 2 -->
    <script src="/assets2/bootstrap/js/bootstrap.min.js"></script>
    <!-- assets 2 -->

    <!-- limit time -->
    <script>
        const tanggalTujuan = new Date("<?= $card['periode'] ?>").getTime();
        const hitungMundur = setInterval(function() {
            const sekarang = new Date().getTime();
            const selisih = tanggalTujuan - sekarang;

            const hari = Math.floor(selisih/ (1000 * 60 * 60 *24));
            const jam = Math.floor(selisih % (1000 * 60 * 60 *24) / (1000 * 60 * 60));
            const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));
            const detik = Math.floor(selisih % (1000 * 60 ) / 1000);

            const bg = document.getElementById('timing');
            const daftar = document.getElementById('daftar');
            const href = document.getElementById('href');
            bg.innerHTML = 'Waktu tersisa: ' + hari + ' hari ' + jam + ':' + menit + ':' + detik;

            if(selisih < 0) {
                clearInterval(hitungMundur);
                bg.innerHTML = 'Waktunya abis, kesyan deh lu';
                daftar.innerHTML = "Close";
                daftar.disabled = true;
                href.classList.add('disabled-link');
            }
        }, 1000);

    </script>
    <!-- limit time -->

</body>

</html>