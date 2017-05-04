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
