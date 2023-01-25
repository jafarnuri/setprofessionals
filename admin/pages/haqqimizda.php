<?php 
include ('header.php');

$haqqimizdasor=$db->prepare("SELECT * FROM haqqimizda where haqqimizda_id=:id");
$haqqimizdasor->execute(array(
  'id' =>2
  ));
$haqqimizdacek=$haqqimizdasor->fetch(PDO::FETCH_ASSOC);



 ?>


        <div id="page-wrapper">
            <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                  <label >Yüklü Logo</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">

                    <?php 
                    if (strlen($haqqimizdacek['haqqimizda_logo'])>0) {?>

                    <img width="200"  src="../../<?php echo $haqqimizdacek['haqqimizda_logo']; ?>">

                    <?php } else {?>


                    <img width="200"  src="../../dimg/logo-yok.png">


                    <?php } ?>

                    
                  </div>
                </div>

                <div class="form-group">
                  <label >Resim Seç</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="first-name"  name="haqqimizda_logo"  class="form-control ">
                  </div>
                </div>

               <input type="hidden" name="eski_yol" value="<?php echo $haqqimizdacek['haqqimizda_logo']; ?>">

                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="logoduzenle" class="btn btn-primary">Güncelle</button>
                </div>

              </form>



             <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="col-lg-12">

                            <div class="form-group">
                             <label>Haqqimizda</label>
                             
                               <input type="text" id="first-name" name="haqqimizda_muvzu"  value="<?php echo $haqqimizdacek['haqqimizda_muvzu']; ?>" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                           
                            <div class="col-lg-12 mt-2">
                                <button type="submit" name="haqqimizdaguncelle" class="btn btn-primary btn-block btn-social btn-dropbox"><i class="fa fa-edit"></i>Güncelle</button>
                               
                            </div>


                        </div>
                        </form>
             
        </div>
        <!-- /#page-wrapper -->

    </div>


    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/raphael.min.js"></script>
    <script src="../js/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/startmin.js"></script>

</body>

</html>