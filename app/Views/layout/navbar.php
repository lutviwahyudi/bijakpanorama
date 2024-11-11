<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <a href="index.html" class="logo m-0 float-start">Bijak Panorama</a>

                <ul
                    class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li class="active"><a href="<?= base_url('/')?>">Home</a></li>
                    <li class="has-children">
                        <a href="">Akomodasi</a>
                        <ul class="dropdown">
                            <li><a href="<?= base_url('kamar')?>"> Sewa Kamar</a></li>
                            <li><a href="<?= base_url('mobil')?>">Sewa Mobil</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('home/about')?>">About</a></li>
                    <li><a href="<?= base_url('contact') ?>">Contact Us</a></li>
                    <li><a href="<?= base_url('auth')?>">Slot Room</a></li>
                </ul>

                <a
                    href="#"
                    class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                    data-toggle="collapse"
                    data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</nav>