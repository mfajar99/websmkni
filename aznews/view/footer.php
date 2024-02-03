<section id="kontak" class="contact-section" style="background-color: #F9F9F9;">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h2 class="contact-title text-left">Kontak Kami</h2>
         </div>
         <div class="col-lg-8">
            <div class="map-responsive">
               <?= $organisasi['lokasi']?>
            </div>
         </div>
         <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="ti-home"></i></span>
               <div class="media-body">
                  <h3><?= $organisasi['alamat']?></h3>
                  <p>Alamat Kami</p>
               </div>
            </div>
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="ti-tablet"></i></span>
               <div class="media-body">
                  <h3><?= $organisasi['no_hp_organisasi']?></h3>
                  <p>Nomor Telp Kami</p>
               </div>
            </div>
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="ti-email"></i></span>
               <div class="media-body">
                  <h3><?= $organisasi['email_organisasi']?></h3>
                  <p>Kirim Pesan Via Email</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ================ contact section end ================= -->
<footer>
   <!-- Footer Start-->
   <div class="footer-area footer-padding fix">
      <div class="container">
         <div class="row d-flex justify-content-between">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <div class="single-footer-caption text-center">
                  <div class="single-footer-caption">
                     <!-- logo -->
                     <div class="footer-tittle">
                        <div class="footer-area">
                           <div class="footer">
                              <h4 style="text-transform: uppercase; color: #FC460A;"><?= $organisasi['nama_organisasi']?><br></h4>
                              <p>
                                 Alamat. <?= $organisasi['alamat']?> <br>
                                 No. Telephone : <?= $organisasi['no_hp_organisasi']?> |
                                 Email : <?= $organisasi['email_organisasi']?> <br>
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- social -->
                     <div class="footer-social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer-bottom aera -->
   <div class="footer-bottom-area">
      <div class="container">
         <div class="footer-border">
            <div class="row d-flex align-items-center justify-content-between">
               <div class="col-lg-12">
                  <div class="footer-copy-right">
                     <p style="font-weight: normal">Copyright &copy; 2022 <a style="color: #FC460A;"><?=$organisasi['nama_singkat_organisasi']?></a></p>
                  </div>
               </div>
            </div>  
         </div>
      </div>
   </div>
<!-- Footer End-->
</footer>
   <!-- JS here -->
   <!-- All JS Custom Plugins Link Here here -->
   <script src="aznews/assets/js/vendor/modernizr-3.5.0.min.js"></script>
   <!-- Jquery, Popper, Bootstrap -->
   <script src="aznews/assets/js/vendor/jquery-1.12.4.min.js"></script>
   <script src="aznews/assets/js/popper.min.js"></script>
   <script src="aznews/assets/js/bootstrap.min.js"></script>
   <!-- Jquery Mobile Menu -->
   <script src="aznews/assets/js/jquery.slicknav.min.js"></script>
   <!-- Jquery Slick , Owl-Carousel Plugins -->
   <script src="aznews/assets/js/owl.carousel.min.js"></script>
   <script src="aznews/assets/js/slick.min.js"></script>
   <!-- Date Picker -->
   <script src="aznews/assets/js/gijgo.min.js"></script>
   <!-- One Page, Animated-HeadLin -->
   <script src="aznews/assets/js/wow.min.js"></script>
   <script src="aznews/assets/js/animated.headline.js"></script>
   <script src="aznews/assets/js/jquery.magnific-popup.js"></script>
   <!-- Breaking New Pluging -->
   <script src="aznews/assets/js/jquery.ticker.js"></script>
   <script src="aznews/assets/js/site.js"></script>
   <!-- Scrollup, nice-select, sticky -->
   <script src="aznews/assets/js/jquery.scrollUp.min.js"></script>
   <script src="aznews/assets/js/jquery.nice-select.min.js"></script>
   <script src="aznews/assets/js/jquery.sticky.js"></script>
   <!-- contact js -->
   <script src="aznews/assets/js/contact.js"></script>
   <script src="aznews/assets/js/jquery.form.js"></script>
   <script src="aznews/assets/js/jquery.validate.min.js"></script>
   <script src="aznews/assets/js/mail-script.js"></script>
   <script src="aznews/assets/js/jquery.ajaxchimp.min.js"></script>
   <!-- Jquery Plugins, main Jquery -->	
   <script src="aznews/assets/js/plugins.js"></script>
   <script src="aznews/assets/js/main.js"></script>
        
   </body>
</html>