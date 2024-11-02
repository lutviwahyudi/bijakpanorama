<?= $this->include('layout/header') ?>
<?= $this->include('layout/navbar') ?>

<div class="container" style="margin-top: 10%;">
    <h2 class="font-weight-bold text-primary heading text-center">
        Pilih Mobil
    </h2>
</div>

<div class="section section-properties">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="property-item mb-30">
                    <a href="property-single.html" class="img">
                        <img src="<?= base_url('assets') ?>/images/mobil3.png" alt="Image" class="img-fluid" />
                    </a>
                    <div class="property-content">
                        <div class="price mb-2"><span>Rp.2.500.000,00</span></div>
                        <div>
                            <span class="d-block mb-2 text-black-50"></span>
                            <span class="city d-block mb-3">1-2 Minggu</span>
                            <a
                                href="property-single.html"
                                class="btn btn-primary py-2 px-3">Pesan</a>
                        </div>
                    </div>
                </div>
                <!-- .item -->
            </div>
        </div>
        <!-- <div class="row align-items-center py-5">
            <div class="col-lg-3">Pagination (1 of 10)</div>
            <div class="col-lg-6 text-center">
                <div class="custom-pagination">
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                </div>
            </div>
        </div> -->
    </div>
</div>

<?= $this->include('layout/footer') ?>