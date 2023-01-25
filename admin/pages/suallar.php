<?php 
include ('header.php');



$sualsor=$db->prepare("SELECT * FROM sual");
$sualsor->execute(); 
 ?>

            <div id="page-wrapper">
                <div class="container-fluid ">
                    <div class="row">
                        <h3>Suallar</h3>
                       
                        <div class="col-lg-12">
                            <a class="btn btn-primary btn-block btn-social btn-dropbox" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-plus"></i> Add new line
                            </a>
                        </div>
                   </div>
                    <div class="row">
                      
                        <div class="col-lg-12">

                          
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sira</th>
                                            <th>Sual</th>
                                            <th>Cavab</th>
                                            <th class="text-center">Sil</th>
                                            
                                       </tr>
                                    </thead>

                                    <tbody>

                             <?php 

                              $say=0;
           
                                  while($sualcek=$sualsor->fetch(PDO::FETCH_ASSOC)) {$say++?>


                                     <tr>
                                      <td><?php echo $say ?></td>
                                      <td><?php echo $sualcek['sual_sual'] ?></td>
                                      <td><?php echo $sualcek['sual_cavab'] ?></td>
                                      <td><center><a href="../netting/islem.php?sual_id=<?php echo $sualcek['sual_id']; ?>&sualsil=ok"><button  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></center></td>
                                      </tr>



                                      <?php } ?>


              </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#MOdal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Create</h4>
                    </div>
                    <div class="modal-body">
                        
                            <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="col-lg-12">
                           <div class="form-group">
                            <label>Sual</label>
                            <textarea name="sual_sual" class="form-control" rows="3"></textarea>
                           </div>
                            <div class="form-group">
                            <label>Cavab</label>
                            <textarea name="sual_cavab" class="form-control" rows="3"></textarea>
                        </div>
                            
                            
                         

                        <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button name="sualcreat" type="submit" class="btn btn-primary">Create</button>
                        </div>

                        </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                       
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
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
