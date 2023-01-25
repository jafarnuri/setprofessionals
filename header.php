<?php 
include 'admin/netting/baglan.php';
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
  'id' => 1
  ));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);



 ?>
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center">
          <a href="mailto:akber.orujov@gmail.com"><?php echo $ayarcek['ayar_mail'] ?></a>
        </i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><?php echo $ayarcek['ayar_tel'] ?></span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="<?php echo $ayarcek['ayar_twitter'] ?>" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="<?php echo $ayarcek['ayar_facebook'] ?>" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="<?php echo $ayarcek['ayar_instagram'] ?>" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="<?php echo $ayarcek['ayar_linkedin'] ?>"  class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Set professionals<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Ana Sayfa</a></li>
          <li><a href="#about">Abaut </a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>         
         
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->