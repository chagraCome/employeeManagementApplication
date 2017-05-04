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
 
 
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="" />
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!-- MESSAGES SECTION -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="label label-success"> <?php 
									   
									   $requete="select * from message where `id_dest`=".$id.";";
		                               $resultatt=mysqli_query($conn,$requete)or die("error");
									   echo mysqli_num_rows($resultatt);
									   ?>
									   </span>    <i class="icon-envelope-alt"></i>&nbsp; <i class="icon-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                       <strong>
									   <?php 
									   
									
									    while ($row = mysqli_fetch_assoc($resultatt)) {
										
						               $id_rec=$row['id'];
									   $requete3="select * from employe where `id`=".$id_rec.";";
		                               $resultat3=mysqli_query($conn,$requete3)or die("error");
									   $row3 = mysqli_fetch_assoc($resultat3);
									   echo $row3["Nom"]; 
									   ?>
									 
									 </strong>
									  
                                        <span class="pull-right text-muted">
                                            <em><?php echo $row["date"]; ?></em>
                                        </span>
                                    </div>
                                    <div><?php echo $row["message"]; ?>
                                        <br />
                                       

                                    </div>
									 </a>
                            </li>
                            <li class="divider"></li>
									<?php 
									}
        
    mysqli_free_result($resultatt);
	?>
                               
                            
                            
                           
                        </ul>

                    </li>
              
                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="deconnexion.php"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src=<?php echo"assets/img/".$donnees['image']; ?> />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php echo $_SESSION['utilisateur']; ?></h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="dashbord.php" >
                        <i class="icon-table"></i> Home
	   
                       
                    </a>                   
                </li>



                
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> Absences
	                       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">1</span>&nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="pages_calendar.php"><i class="icon-angle-right"></i> Calender </a></li>
                      
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Activity
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="pages_calendar.php"><i class="icon-angle-right"></i> Calendar </a></li>
						<li><a href="activitie.php"><i class="icon-angle-right"></i> Add Activity For ToDay </a></li>
                       
                    </ul>
                </li>
                <li class="panel">
                    <a href="holiday.php" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-bar-chart"></i> Holidays </a></li>
	 <li><a href="message.php"><i class="icon-signin"></i> Messenger </a></li>
        </div>
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">
		<div class="inner">
             <div class="row">
                    <div class="col-lg-12">
                    <h1 > Hello <?php echo $_SESSION['nom']; ?>  </h1>
                    </div>
             </div> 
			  <hr />  
			  <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                         <div class="chat-panel panel panel-primary">
                            <div class="panel-heading">
                                <i class="icon-comments"></i>
                                About you
								
								
							</div>
							 <div class="panel-body">
			  
                          <?php 
						 
	                           echo $donnees['Nom'];?>
							   </br>
							   <?php
	                            echo $donnees['Adresse'];?>
								</br>
								<?php 
						          echo $donnees['Mail'];
								  ?>
						 
				
						 </div>
						</div>
						
                       
                       
                         </div>
                         </div>
				
				
				<div class="col-lg-6">
                                <div class="panel panel-default">
                         <div class="chat-panel panel panel-primary">
                            <div class="panel-heading">
                                <i class="icon-comments"></i>
                                Point System 
								</div>
								<div class="panel-body">
			  
                          <div class="panel-body">   
                                       <div style="margin-top: 10px;">
                  <!--END BLOCK SECTION -->
                
			<a href="#" class="btn btn-primary btn-lg" name="enter" id="enter" onClick="enter();"> <h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Enter &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4> </a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#" class="btn btn-danger btn-lg" name="Out" id="Out" onClick="out();"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Out &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4></a>
                   <!-- CHART & CHAT  SECTION -->
            
                           <script>
						   var today = new Date();


						   
						      function enter(){
							  var heure   = today.getHours();
                              var minute  = today.getMinutes();
                              var seconde = today.getSeconds();

           if(minute<10) {
    minute='0'+minute
} 

if(seconde<10) {
    seconde='0'+seconde
} 

if(heure<10) {
    heure='0'+heure
} 


time = heure+':'+minute+':'+seconde;
							    document.getElementById("time_enter").value= time;
								document.getElementById("enter").disabled="false";
							  }
							  function out(){
							  
							   var heure   = today.getHours();
                              var minute  = today.getMinutes();
                              var seconde = today.getSeconds();

           if(minute<10) {
    minute='0'+minute
} 

if(seconde<10) {
    seconde='0'+seconde
} 

if(heure<10) {
    heure='0'+heure
} 


time = heure+':'+minute+':'+seconde;
							    document.getElementById("time_out").value= time;
								document.getElementById("out").disabled="false";
							  }
						   </script>

                        <form method="post" action="dashbord.php">
						</BR>
						<input id="time_enter" name="heure_entre"/>
						
						<input id="time_out" name="heure_sortie"/>
						</BR>
						</BR>
						<button class="btn text-muted text-center btn-danger" type="submit">Click to Valider</button>
						</form>
				
				<?php
                       $heure_entre=$_POST['heure_entre'];
                        $heure_sortie=$_POST['heure_sortie'];
						
						$req=" insert into pointage(`Date_pointage`,`heure_entre`,`heure_sortie`,`id`) values (CURRENT_DATE(),'".$heure_entre."','".$heure_sortie."','".$id."');";
						$result = mysqli_query($conn,$req);
						?> 
						
						<?php
						
                    $requete4="select * from pointage where `id` = '".$id."';";
                        $resultat4=mysqli_query($conn,$requete4)or die("error requete");
                        // echo mysqli_num_rows($resultat4);
						?>
						
						   
                     
						<!-- affiche l'historique de pointage de user profil -->
						 <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
														  
                                    <thead>
                                        <tr>
                                            <th> Date  </th>
                                            <th> Time In</th>
                                            <th> Time Out </th>
                                           
                                        </tr>
                                    </thead>
						
									  <tbody>
						<?php
                         while ($row2 = mysqli_fetch_assoc($resultat4))
                           {
						   ?>
									    <tr>
										<td>
										<?php  echo $row2["Date_pointage"]; ?>
										</td>
										<td>
										<?php echo $row2["heure_entre"]; ?>
										</td>
										<td>
										<?php echo $row2["heure_sortie"]; ?>
										</td>
										</tr>
									<?php 
									}
                                 mysqli_free_result($resultat4);
	                                ?>
                                    </tbody>
                                </table>
                            </div>
						
						
						
						
						</div>
				</div>
						 </div>
						 
								</div>
								</div>
                        </div>        
                           </div>           
                                    


                
                 <!--END CHAT & CHAT SECTION -->
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
               
                                   
                                    
                                   
                                       
               
                <!-- END COMMENT AND NOTIFICATION  SECTION -->
                

                

                 <!--  STACKING CHART  SECTION   -->
            
		
		
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


    <!-- GLOBAL SCRIPTS -->
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
   
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
<?php
 } 
else
header('location:login.php');
?>