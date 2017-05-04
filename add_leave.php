 <?php
// require_once ("connect_to_base.php") ;
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

<form action="add_leave.php" method="post" class="form-signin">
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
				 
					  <div id="datePickerBlock3" class="body collapse in">
				
                      <input type="text" name="date_dbut" value="01/01/2015" />

                 <script type="text/javascript">
                 $(function() {
                 $('input[name="date_debut"]').datepicker();
                  });
                    </script>
						 </div>
						 </div> 
					<div class="form-group">
                         <label> Periode </label>   	 
						  <input type="number" placeholder="Periode" name="periode" required = "required" class="form-control" />
						  </div>
						  <input type="submit" class="btn text-muted text-center btn-success" value="Submit">
						  </form>
						  </div>
		  </div>
      </div>
	  </div>
		    
 <!--END PAGE CONTENT -->     
          
          <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->



       <script src="assets/js/formsInit.js"></script>
        <script>
		function pagechange(frompage, topage) {
  var page=document.getElementById('formpage_'+frompage);
  if (!page) return false;
  page.style.visibility='hidden';
  page.style.display='none';

  page=document.getElementById('formpage_'+topage);
  if (!page) return false;
  page.style.display='block';
  page.style.visibility='visible';

  return true;
}
		</script>
		<script>
            $(function () { formInit(); });
        </script>
				
</div>
</body>
    <!-- END BODY -->
</html>