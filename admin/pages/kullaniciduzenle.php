]<?php 
include ('header.php');

$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
$kullanicisor->execute(array(
  'id' =>1
  ));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);



 ?>


        <div id="page-wrapper">
       

             <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="col-lg-12">

                            <div class="form-group">
                             <label>mail</label>
                             
                               <input type="text" id="first-name" name="kullanici_mail"  value="<?php echo $kullanicicek['kullanici_mail']; ?>" class="form-control col-md-7 col-xs-12">
                             
                            </div>

                            <div class="form-group">
                             <label>sifre</label>
                             
                               <input type="text" id="first-name" name="kullanici_password"  value="<?php echo $kullanicicek['kullanici_password']; ?>" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                           
                            <div class="col-lg-12 mt-2">
                                <button type="submit" name="kullaniciduzenle" class="btn btn-primary btn-block btn-social btn-dropbox"><i class="fa fa-edit"></i>Güncelle</button>
                               
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