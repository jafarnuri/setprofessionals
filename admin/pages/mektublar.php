<?php 
include ('header.php');
$mektubsor=$db->prepare("SELECT * FROM mektub");
$mektubsor->execute(); 
 


 ?>


        <div id="page-wrapper">
            <div class="container-fluid ">

                <div class="row">

                    <div class="col-lg-12">


                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sira</th>
                                        <th>Ad</th>
                                        <th>Email</th>
                                        <th>Mövzu</th>
                                        <th>Mesaj</th>
                                        <th class="text-center">sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                            $say=0;
           
                                             while($mektubcek=$mektubsor->fetch(PDO::FETCH_ASSOC)) {$say++?>


                                    <tr>
                                        <td><?php echo $say ?></td>
                                        <td><?php echo $mektubcek['mektub_ad'] ?></td>
                                        <td><?php echo $mektubcek['mektub_email'] ?></td>
                                        <td><?php echo $mektubcek['mektub_movzu'] ?></td>
                                        <td><?php echo $mektubcek['mektub_mesaj'] ?></td>
                                        <td><center><a href="../netting/islem.php?mektub_id=<?php echo $mektubcek['mektub_id']; ?>&mektubsil=ok"><button  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></center></td>
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