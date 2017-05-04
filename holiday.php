 <?php
 require_once ("connect_to_base.php") ;
 //include "html-header.php";
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
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Holiday Page</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
	   <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
       <link rel="stylesheet" href="assets/plugins/fullcalendar-1.6.2/fullcalendar/fullcalendar.css" />
<link rel="stylesheet" href="assets/css/calendar.css" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

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
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2> Holiday </h2>



                    </div>
                </div>

                <hr />
				 
					
					<!------------------------------------------------>
					<div class="col-lg-4">


                        <div class="panel panel-default">
                        <div class="panel-heading">
                             ADD Holiday Requeste
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-info" data-toggle="modal" data-target="#formModal">
                                Click Here To Launch
                            </button>
                             
                        </div>
                    </div>
                    </div>
					<!------------------------------------------->
					<div class="row">
					  <div class="col-lg-12">
                        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H2">Holiday Requeste</h4>
                                        </div>
                                        <div class="modal-body">
                       <form action="holiday.php" method="post" role="form">
                                       <div class="form-group">
                         <label>type holiday</label>   
                         <select name="id_type_conge">
							<?php
							require_once "connect_to_base.php";
							$query = "select * from type_conge " ;
							$result = mysqli_query($conn,$query) ;
							while ($row = mysqli_fetch_array($result)){
								echo "<option value='".$row["id_type_conge"]."'>".$row['type_conge']."</option>";
							}
							?>
						</select>
						</div>
						
				    <div class="form-group">
				 </BR>
				  <label class="control-label col-lg-2" >Date</label>
				 
					  <div id="datePickerBlock4" class="body collapse in">
				
                      <input type="text" name="date_debut" value="01/01/2015" />

                 <script type="text/javascript">
                 $(function() {
                 $('input[name="date_debut"]').datepicker();
                  });
                    </script>
						 </div>
						 </div> 
					<div class="form-group">
                         <label> Periode </label>   	 
						  <input type="number" placeholder="Periode" name="periode" required="required" class="form-control" />
						  </div>
                                       
                                    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save </button>
                                        </div>
										</form>
										<?php
					$id_type_conge=$_POST['id_type_conge'];
					$date_debut=$_POST['date_debut'];
					$periode=$_POST['periode'];
					//CURRENT_DATE()
					$req_conge=" insert into conge(`id_type_conge`,`date_debut`,`periode`,`id`,`statut`) values ('".$id_type_conge."','".$date_debut."','".$periode."','".$id."','under consideration');";
						$result_conge = mysqli_query($conn,$req_conge) or die("error requete insert");
					?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
					</div>
					
						
					
					<?php
						
                    $requete_aff_conge="select `type_conge`.`type_conge`,`date_debut`,`periode`,`statute_paiement`,`statut` from conge,type_conge where `id` = '".$id."' and `conge`.`id_type_conge`=`type_conge`.`id_type_conge` ;";
                        $resultat_aff_conge=mysqli_query($conn,$requete_aff_conge)or die("error requete affichage");
                        // echo mysqli_num_rows($resultat4);
						?>
						
						   
                     
						<!-- affiche l'historique de pointage de user profil -->
						 <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
						
                                    <thead>
                                        <tr>
                                            <th> Holiday Type  </th>
                                            <th> start</th>
                                            <th> Periode </th>
                                            <th>Statute paiement</th>
											<th>Validation</th>
                                        </tr>
                                    </thead>
						
									  <tbody>
							 <?php
                         while ($row3 = mysqli_fetch_assoc($resultat_aff_conge))
                           {
						   ?>
									    <tr>
										<td>
										<?php  echo $row3["type_conge"]; ?>
										</td>
										<td>
										<?php echo $row3["date_debut"]; ?>
										</td>
										<td>
										<?php echo $row3["periode"]; ?>
										</td>
										<td>
										<?php echo $row3["statute_paiement"]; ?>
										</td>
										<td>
										<?php echo $row3["statut"]; ?>
										</td>
										</tr>
									<?php 
									}
                                 mysqli_free_result($resultat_aff_conge);
	                                ?>
                                    </tbody>
                                </table>
                            </div>
				
		 </div>
		 
		</div> 
		
		</div>
		
		 <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id="footer">
        <p>------------</p>
    </div>
    <!--END FOOTER -->
<script>
            $(function () { formInit(); });
        </script>

    <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     
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
	<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/flot/jquery.flot.js"></script>
	<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
<?php
 } 
else
header('location:login.php');
?>