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