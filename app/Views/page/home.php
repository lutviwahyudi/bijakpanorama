    <!-- memanggil bagian header -->
    <?= $this->include('layout/header') ?>
    <!-- memanggil bagian navbar -->
    <?= $this->include('layout/navbar') ?>

    <div class="hero">
        <div class="hero-slide">
            <div
                class="img overlay"
                style="background-image: url('<?= base_url('assets') ?>/images/kamar/kr5.jpg')"></div>
            <div
                class="img overlay"
                style="background-image: url('<?= base_url('assets') ?>/images/kamar/kr4.png')"></div>
            <div
                class="img overlay"
                style="background-image: url('<?= base_url('assets') ?>/images/kamar/kr1.jpg')"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up">
                        Hotel Margonda Residence 2
                    </h1>
                    <p style="color: white;">Ingin beristirahat di lokasi yang mudah diakses dan nyaman?
                        Kami hadir untuk memenuhi kebutuhan Anda dengan kamar yang bersih, pelayanan ramah, dan harga yang sesuai.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col">
                    <h2 class="font-weight-bold text-primary text-center heading">
                        Kamar & Fasilitas
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">

                            <div class="property-item">
                                <a href="" class="ratio ratio-1x1">
                                    <img src="<?= base_url('assets') ?>/images/kamar/kamar17.jpg" alt="Image" class="img-fluid" />
                                </a>
                                <div class="property-content">
                                    <div class="price mb-2"><span>Rp.250.000,00</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">Free Wifi, Tv Android, AC, dan mini Kitchen set </span>
                                        <span class="city d-block mb-3">Fullday</span>

                                    </div>
                                </div>
                            </div>
                            <div class="property-item">
                                <a href="" class="ratio ratio-1x1">
                                    <img src="<?= base_url('assets') ?>/images/kamar/kamar1.jpg" alt="Image" class="img-fluid" />
                                </a>
                                <div class="property-content">
                                    <div class="price mb-2"><span>Rp.150.000,00</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">Free Wifi, Tv Android, AC, dan mini Kitchen set </span>
                                        <span class="city d-block mb-3">6 Jam</span>

                                    </div>
                                </div>
                            </div>
                            <div class="property-item">
                                <a href="" class="ratio ratio-1x1">
                                    <img src="<?= base_url('assets') ?>/images/kamar/kamar6.jpg" alt="Image" class="img-fluid" />
                                </a>
                                <div class="property-content">
                                    <div class="price mb-2"><span>Rp.100.000,00</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">Free Wifi, Tv Android, AC, dan mini Kitchen set </span>
                                        <span class="city d-block mb-3">4 Jam</span>

                                    </div>
                                </div>
                            </div>
                            <!-- .item -->
                        </div>

                        <div
                            id="property-nav"
                            class="controls"
                            tabindex="0"
                            aria-label="Carousel Navigation">
                            <span
                                class="prev"
                                data-controls="prev"
                                aria-controls="property"
                                tabindex="-1">Prev</span>
                            <span
                                class="next"
                                data-controls="next"
                                aria-controls="property"
                                tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-1">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <span class="flaticon-house"></span>
                        <h3 class="mb-3">Our Properties</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptates, accusamus.
                        </p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature">
                        <span class="flaticon-building"></span>
                        <h3 class="mb-3">Property for Sale</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptates, accusamus.
                        </p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <span class="flaticon-house-3"></span>
                        <h3 class="mb-3">Real Estate Agent</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptates, accusamus.
                        </p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature">
                        <span class="flaticon-house-1"></span>
                        <h3 class="mb-3">House for Sale</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptates, accusamus.
                        </p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section sec-testimonials">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                        Apa Kata Mereka ?
                    </h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev">Prev</span>

                        <span class="next" data-controls="next">Next</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4"></div>
            </div>
            <div class="testimonial-slider-wrap">
                <div class="testimonial-slider">
                    <?php foreach ($message as $msg) : ?>
                        <div class="item">
                            <div class="testimonial">
                                <img
                                    src="<?= base_url('assets') ?>/images/person.jpg"
                                    alt="Image"
                                    class="img-fluid rounded-circle w-25 mb-4" />
                                <div class="rate">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                </div>
                                <h3 class="h5 text-primary mb-4"><?= $msg['nama'] ?></h3>
                                <blockquote>
                                    <p>
                                        &ldquo;<?= $msg['deskripsi'] ?>&rdquo;
                                    </p>
                                </blockquote>
                                <p class="text-black-50"><?= $msg['email'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-4 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        INGAT APART, INGAT BIJAK
                    </h2>
                    <p class="text-black-50">
                        Temukan penginapan yang sempurna untuk Anda! Nikmati kenyamanan, fasilitas lengkap, dan pengalaman menginap tak terlupakan di tempat kami.
                        Rasakan suasana yang tenang, aman, dan nyaman bersama kami.
                    </p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="<?= base_url('assets') ?>/images/kamar/kr3.jpg" alt="Image" class="img-fluid" style="width: 640px; height: 480px">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Fasilitas</h3>
                            <p class="text-black-50">
                                Pilihan properti terbaik dengan lokasi strategis dan fasilitas lengkap untuk kenyamanan Anda.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Kenyamanan</h3>
                            <p class="text-black-50">
                                Tim agen berpengalaman dan terpercaya siap membantu Anda menemukan penginapan yang sesuai kebutuhan.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Keamanan</h3>
                            <p class="text-black-50">
                                Properti resmi dan aman, dijamin nyaman dan sesuai standar tinggi untuk pengalaman menginap terbaik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="row justify-content-center footer-cta" data-aos="fade-up">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="mb-4">Be a part of our growing real state agents</h2>
                <p>
                    <a
                        href="#"
                        target="_blank"
                        class="btn btn-primary text-white py-3 px-4">Apply for Real Estate agent</a>
                </p>
            </div>
            <!-- /.col-lg-7 -->
        </div>
        <!-- /.row -->
    </div>

    <div class="section section-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6 mb-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        Our Agents
                    </h2>
                    <p class="text-black-50">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                        enim pariatur similique debitis vel nisi qui reprehenderit totam?
                        Quod maiores.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img
                            src="<?= base_url('assets') ?>/images/person_1-min.jpg"
                            alt="Image"
                            class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">James Doe</a></h2>
                            <span class="meta d-block mb-3">Real Estate Agent</span>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Facere officiis inventore cumque tenetur laboriosam, minus
                                culpa doloremque odio, neque molestias?
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img
                            src="<?= base_url('assets') ?>/images/person_2-min.jpg"
                            alt="Image"
                            class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Jean Smith</a></h2>
                            <span class="meta d-block mb-3">Real Estate Agent</span>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Facere officiis inventore cumque tenetur laboriosam, minus
                                culpa doloremque odio, neque molestias?
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img
                            src="<?= base_url('assets') ?>/images/person_3-min.jpg"
                            alt="Image"
                            class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Alicia Huston</a></h2>
                            <span class="meta d-block mb-3">Real Estate Agent</span>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Facere officiis inventore cumque tenetur laboriosam, minus
                                culpa doloremque odio, neque molestias?
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- memanggil bagian footer -->
    <?= $this->include('layout/footer') ?>