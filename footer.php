<?php 
include 'admin/netting/baglan.php';
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
  'id' => 1
  ));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);



 ?>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Set professionals</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="<?php echo $ayarcek['ayar_twitter'] ?>" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="<?php echo $ayarcek['ayar_facebook'] ?>" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="<?php echo $ayarcek['ayar_instagram'] ?>" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="<?php echo $ayarcek['ayar_linkedin'] ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> <?php echo $ayarcek['ayar_tel'] ?><br>
            <strong>Email:</strong><?php echo $ayarcek['ayar_mail'] ?><br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Set professionals</span></strong>. All Rights Reserved
      </div>      
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->