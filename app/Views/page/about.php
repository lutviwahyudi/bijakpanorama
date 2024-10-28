<?= $this->include('layout/header')?>
<?= $this->include('layout/navbar')?>


    <div
        class="hero page-inner overlay"
        style="background-image: url('images/hero_bg_3.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">About</h1>

                    <nav
                        aria-label="breadcrumb"
                        data-aos="fade-up"
                        data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li
                                class="breadcrumb-item active text-white-50"
                                aria-current="page">
                                About
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row text-left mb-5">
                <div class="col-12">
                    <h2 class="font-weight-bold heading text-primary mb-4">About Us</h2>
                </div>
                <div class="col-lg-6">
                    <p class="text-black-50">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                        enim pariatur similique debitis vel nisi qui reprehenderit totam?
                        Quod maiores.
                    </p>
                    <p class="text-black-50">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                        saepe, explicabo nihil. Est, autem error cumque ipsum repellendus
                        veniam sed blanditiis unde ullam maxime veritatis perferendis
                        cupiditate, at non esse!
                    </p>
                    <p class="text-black-50">
                        Enim, nisi labore exercitationem facere cupiditate nobis quod
                        autem veritatis quis minima expedita. Cumque odio illo iusto
                        reiciendis, labore impedit omnis, nihil aut atque, facilis
                        necessitatibus asperiores porro qui nam.
                    </p>
                </div>
            </div>
        </div>
    </div>

   <?= $this->include('layout/footer')?>