<?php
 require_once ("connect_to_base.php") ;
 include "html-header.php";
 ?>
 <?php
 session_start();
 if(isset($_SESSION['utilisateur']))
 {
 
                       $id=$_SESSION['id'];
						 require "connect_to_base.php";
	                     if (mysqli_connect_error())
                             {
                             die ("Failed to connect to MySQL: ");
                             } 
							 
						$requete2="select * from employe where `id`=".$id.";";
		                 $resultat=mysqli_query($conn,$requete2)or die("error");
						 
                       
	
	                           $donnees = mysqli_fetch_assoc($resultat);
 ?>
     <!-- BEGIN BODY -->
<body class="padTop53 " >

   <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
      <?php include "header_section.php" ;
	  ?>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
		<?php
      include "menu_section.php" ;
	  ?>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
       
				 
					
					<!------------------------------------------------>
					
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Add Activity</h2>



                    </div>
                </div>

                <hr />
				
				<!------------------------------------------------->
				<div class="col-lg-4">
				<div class="panel panel-default">
                        <div class="panel-heading">
                             ADD Activity
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-info" data-toggle="modal" data-target="#formModal">
                                Click Here To Launch
                            </button>
                             
                        </div>
                    </div>
                    </div>
				
				
				<!-------------------------------------------------->
                  <div class="row">
					  <div class="col-lg-12">
                        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Activity for ToDay <?php echo date('d-m-Y'); ?></h4>
                                        </div>
                                        <div class="modal-body">
                      <form action="activitie.php" method="post" role="form">
                            <div class="form-group">
                         <label> Time1 </label>   	 
						  <input type="time" placeholder="" name="time1" required="required" class="form-control" />
						  </div>
						  
						  <div class="form-group">
                         <label> Time2</label>   	 
						  <input type="time" placeholder="" name="time2" required="required" class="form-control" />
						  </div>
						  
                      <div class="form-group">
                         <label> Activity</label>   	
                   <textarea required="required" placeholder="Activity" name="activity" class="form-control" row="8"></textarea>						 
						</div>

                                 <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save </button>
                                        </div>
										</form>
										
				
   </div>

 </div>
  


            </div>

 </div>
  </div>

       <!--END PAGE CONTENT -->
 						<?php
									
					$time1=$_POST['time1'];
					$time2=$_POST['time2'];
					$activity=$_POST['activity'];
					//CURRENT_DATE()
					$req_activity=" insert into activity(`date_start_activity`,`time1`,`time2`,`activity`,`id`) values ('2015/10/02','".$time1."','".$time2."','".$activity."','".$id."');";
						$result_activity= mysqli_query($conn,$req_activity) or die("error requete insert");
					?>

    </div>

						
						<?php
						
                    $requete_aff_activity="select `date_start_activity`,`time1`,`time2`,`date_finish_activity`,`activity` from activity where `id` = '".$id."';";
                        $resultat_aff_activity=mysqli_query($conn,$requete_aff_activity)or die("error requete affichage");
                        // echo mysqli_num_rows($resultat4);
						?>		   
                     
						<!-- affiche l'historique de pointage de user profil -->
						 <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example2">
						
                                    <thead>
                                        <tr>
                                            <th>Date start activity </th>
                                            <th> Time in</th>
                                            <th> Time finish</th>
                                            <th>Activity</th>
											<th>Date finish activity</th>
                                        </tr>
                                    </thead>
					
									  <tbody>
							 <?php
                         while ($row5 = mysqli_fetch_assoc($resultat_aff_activity))
                           {
						   ?>
									    <tr>
										<td>
										<?php  echo $row5["date_start_activity"]; ?>
										</td>
										<td>
										<?php echo $row5["time1"]; ?>
										</td>
										<td>
										<?php echo $row5["time2"]; ?>
										</td>
										<td>
										<?php echo $row5["activity"]; ?>
										</td>
										<td>
										<?php echo $row5["date_finish_activity"]; ?>
										</td>
										</tr>
									<?php 
									}
                                 mysqli_free_result($resultat_aff_activity);
	                                ?>
                                    </tbody>
                                </table>
                            </div>
				
		 </div>
		 
		</div> 
		
		</div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div> -->
    <!--END FOOTER -->
	 <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
 <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
   
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
</body>
    <!-- END BODY-->
    
</html>
<?php
 } 
else
header('location:login.php');
?>
					