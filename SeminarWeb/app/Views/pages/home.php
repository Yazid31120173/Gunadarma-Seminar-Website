<?php $this->extend('layout/templates'); ?>

<?php $this->section('content'); ?>

    <!-- main start -->
    <main class="page landing-page">
        <!-- home start -->
        <section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/tech/image.jpg&quot;);color:rgba(113, 51, 142, 0.70);" id="home">
            <div class="text">
                <h2 class="title">Gunadarma University Seminar</h2>
                <p>The official website for information on seminars held with Gunadarma University agencies.</p>
                <a href="card/seminar">
                    <button class="btn btn-outline-light btn-lg" type="button">Seminar List</button>
                </a>
            </div>
        </section>
        <!-- home end -->

        <!-- slider start -->
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 id="purple">Slider</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div id="slider">
                    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100 d-block" src="assets/img/scenery/ug1.jpg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug2.jpeg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug3.jpeg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug4.jpg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug5.jpg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug6.jpeg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug7.jpeg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug8.jpeg" alt="Slide Image">
                            </div>
                        </div>
                        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="3"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="4"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="5"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="6"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="7"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider end -->
    </main>
    <!-- main end -->

<?php $this->endSection(); ?>