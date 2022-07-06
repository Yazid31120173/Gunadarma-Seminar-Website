<?php $this->extend('layout/templates');?>

<?php $this->section('content'); ?>
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
                    <b>Jun 25, 2022</b>
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
                        <a class="nav-item nav-link active" href="4638.html" role="tab">
                            Deskripsi
                        </a>
                        <a class="nav-item nav-link " href="#" role="tab">
                            Dokumentasi
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
                                    <img src="/assets/img/scenery/cover/<?= $card['gambar']; ?>">
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
                                <a href="#login-modal" data-toggle="modal" class="btn btn-primary shadow btn--full-width d-unauthenticated-registration-link">Daftar</a>
                            </div>
                            <div class="mb-5">
                                <div class="text-for-element">Jadwal Pelaksanaan</div>
                                <div class="row">
                                    <div class="col-sm-3">Mulai</div>
                                    <div class="col-sm-9">: <b>25 Jun 2022</b> 09:00</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">Selesai</div>
                                    <div class="col-sm-9">: <b>25 Jun 2022</b> 10:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- tabbed -->
    
<?php $this->endSection();?>