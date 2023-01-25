<?php 
include 'admin/netting/baglan.php';

$sualsor=$db->prepare("SELECT * FROM sual");
$sualsor->execute(); 
 ?>

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">



                                   <?php  

                              $say=0;
           
                                  while($sualcek=$sualsor->fetch(PDO::FETCH_ASSOC)) {$say++?>

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num"><?php echo $say ?></span>
                    <?php echo $sualcek['sual_sual'] ?>
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <?php echo $sualcek['sual_cavab'] ?>
                  </div>
                </div>
              </div><!-- # Faq item-->

               <?php } ?>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
