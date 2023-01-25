<?php 
include ('header.php');

 ?>


            <div id="page-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                       
                        
                   </div>
                   <h3>Connect</h3>
                    <div class="row">
                      <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                             <label>Phone number</label>
                             <input type="text" name="ayar_tel" value="<?php echo $ayarcek['ayar_tel'] ?>" class="form-control">
                            </div>
                            <div class="col-lg-4">
                             <label>Location</label>
                             <input type="text" name="ayar_maps" value="<?php echo $ayarcek['ayar_maps'] ?>" class="form-control">
                            </div>
                            <div class="col-lg-4">
                             <label>Email</label>
                             <input type="email" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'] ?>" class="form-control">
                            </div>
                            <div class="col-lg-4">
                             <label>FaceBook</label>
                             <input type="text" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook'] ?>" class="form-control">
                            </div>
                            <div class="col-lg-4">
                             <label>Instagram</label>
                             <input type="text" name="ayar_instagram" value="<?php echo $ayarcek['ayar_instagram'] ?>" class="form-control">
                            </div>
                            <div class="col-lg-4">
                             <label>Twitter</label>
                             <input type="text" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter'] ?>" class="form-control">
                            </div>
                            <div class="col-lg-4">
                             <label>Linkedin</label>
                             <input type="text" name="ayar_linkedin" value="<?php echo $ayarcek['ayar_linkedin'] ?>" class="form-control">
                            </div>

                            <div class="col-lg-4 invisible">
                             <label></label>
                             <input type="text">
                            </div>
                         

                            <div class="col-lg-12 mt-2">
                                <button type="submit" name="connectguncel" class="btn btn-primary btn-block btn-social btn-dropbox"><i class="fa fa-edit"></i>Güncelle</button>
                               
                            </div>






                            
                        </div>
                        </form>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
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
