   <!-- memanggil bagian header -->
   <?= $this->include('layout/header') ?>
   <!-- memanggil bagian navbar -->
   <?= $this->include('layout/navbar') ?>
   <div class="hero page-inner overlay" style="background-image: url('<?= base_url('assets')?>/images/kamar/kamar1.jpg')">
       <div class="container">
           <div class="row justify-content-center align-items-center">
               <div class="col-lg-9 text-center mt-5">
                   <h1 class="heading" data-aos="fade-up">Contact Us</h1>
               </div>
           </div>
       </div>
   </div>

   <!-- ini adalah alert pengiriman pesan -->
   <?php if (session()->getFlashdata('success')) : ?>
       <div id="alert" class="alert alert-success col-md-6 col-lg-5 mx-auto">
           <?= session()->getFlashdata('success'); ?>
       </div>
   <?php elseif (session()->getFlashdata('error')) : ?>
       <div id="alert" class="alert alert-danger col-md-6 col-lg-5 mx-auto">
           <?= session()->getFlashdata('error'); ?>
       </div>
   <?php endif; ?>
   <!-- akhir code -->
   <div class="section">
       <div class="container">
           <div class="row">
               <div
                   class="col-lg-4 mb-5 mb-lg-0"
                   data-aos="fade-up"
                   data-aos-delay="100">
                   <div class="contact-info">
                       <div class="address mt-2">
                           <i class="icon-room"></i>
                           <h4 class="mb-2">Location:</h4>
                           <p>
                               Margonda Residence 2, Jalan Margonda Raya No. 525A,<br />
                               Depok 16422
                           </p>
                       </div>

                       <div class="open-hours mt-4">
                           <i class="icon-clock-o"></i>
                           <h4 class="mb-2">Open Hours:</h4>
                           <p>
                               Everyday<br />
                               24 Jam
                           </p>
                       </div>

                       <div class="email mt-4">
                           <i class="icon-envelope"></i>
                           <h4 class="mb-2">Email:</h4>
                           <p>bijakpanorama@gmail.com</p>
                       </div>

                       <div class="phone mt-4">
                           <i class="icon-phone"></i>
                           <h4 class="mb-2">Call:</h4>
                           <p>0812-8699-3335</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                   <form action="<?= base_url('contact/message') ?>" method="post">
                       <div class="row">
                           <div class="col-6 mb-3">
                               <input
                                   type="text"
                                   name="nama"
                                   id="nama"
                                   class="form-control"
                                   placeholder="Your Name" />
                           </div>
                           <div class="col-6 mb-3">
                               <input
                                   type="email"
                                   name="email"
                                   id="email"
                                   class="form-control"
                                   placeholder="Your Email" />
                           </div>
                           <div class="col-12 mb-3">
                               <input
                                   type="text"
                                   name="subject"
                                   id="subject"
                                   class="form-control"
                                   placeholder="Subject" />
                           </div>
                           <div class="col-12 mb-3">
                               <textarea
                                   name="deskripsi"
                                   id="deskripsi"
                                   cols="30"
                                   rows="7"
                                   class="form-control"
                                   placeholder="Message"></textarea>
                           </div>

                           <div class="col-12">
                               <input
                                   type="submit"
                                   value="Send Message"
                                   class="btn btn-primary" />
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
   <!-- memanggil bagian footer -->
   <?= $this->include('layout/footer') ?>