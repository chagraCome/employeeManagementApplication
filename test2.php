<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Login Page</title>
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
     <!-- PAGE LEVEL STYLES -->
	 <link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
    <link href="assets/plugins/jquery-steps-master/demo/css/normalize.css" rel="stylesheet" />
    <link href="assets/plugins/jquery-steps-master/demo/css/wizardMain.css" rel="stylesheet" />
    <link href="assets/plugins/jquery-steps-master/demo/css/jquery.steps.css" rel="stylesheet" /> 
    
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/plugins/magic/magic.css" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 ">

   
     <div class="row">
                  <div class="col-lg-12">
                     
         <div class="panel panel-default">
                       
					   <div class="panel-heading">
                            Vertical Wizard
                        </div>
						<div class="panel-body">
                       
						 
		
               
		<div id="formpage_1" style="visibility: visible; display: block; .."> 
			<form method="POST"  action="register_employe.php" class="form-signin">			
                       <h2> Personal </h2>
          
              <div class="form-group">
               <label>First Name</label>
                <input type="text" placeholder="First Name" name="prenom" required = "required" class="form-control" />
                </div>

                <div class="form-group">
                 <label>Last Name</label>
                <input type="text" placeholder="Last Name" name="nom" required = "required" class="form-control" />
                </div>

                <div class="form-group">
                <label>CIN</label>
                <input type="number" placeholder="CIN" name="cin" required = "required" class="form-control" />
                </div>

                <div class="form-group">
                <label>Sexe</label>
                <input type="radio" id="Homme" name="sexe" value="Homme">
                <label for="Homme" class="form-control">Homme</label> 
                <input type="radio" id="Femme" name="sexe" value="Femme"> 
                <label for="Femme" class="form-control">Femme</label>
                 </div>
				<input type="button" value="next" onclick="pagechange(1,2);">
				</form>
 
 </div>
				  
	
	
									
                                 
				<div id="formpage_2"  style="visibility: hidden; display: block; ..">					
                 class="form-signin"
				 <h2> Login </h2>
                 <div class="form-group">
				  <label class="control-label col-lg-2" >Start</label>
                   <!--<label>Birthday</label>
                    <input type="date" placeholder="Birthday" name="anniversaire">-->
					  <div id="datePickerBlock3" class="body collapse in">
				
				

                        <div class="col-lg-2">
                            <div class="input-group input-append  date" id="dpYears" data-date="12-02-2012"
                                 data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                <input class="form-control" type="text" value="12-02-2012"  name="anniversaire" readonly="" />
                                <span class="input-group-addon add-on"><i class="icon-calendar"></i></span>
                           
                        </div>
						 </div>
						 </div>
                     </div>
             
                <div class="form-group">
               <label>Matricule</label>
                <input type="text" placeholder="Matricule" name="matricule" required = "required" class="form-control" />
                </div>

                 <div class="form-group">
               <label>Adresse</label>
                <input type="text" placeholder="Adress" name="adresse" required = "required" class="form-control" />
                 </div>
 
                 <div class="form-group">
               <label>Telephone</label>
                <input type="number" placeholder="Telephone" name="telephone" required = "required" class="form-control" />
                </div>
				 <input type="button" value="back" onclick="pagechange(2,1);">
  <input type="button" value="next" onclick="pagechange(2,3);">

			
				
				</div>
                            
                

              
				<div id="formpage_3"  style="visibility: hidden; display: block; ..">
                <h2>Extras </h2>
                   <!--<form method="POST"  action="register_employe.php"class="form-signin"> --> 
				  <div class="form-group">
				  <label class="control-label col-lg-2" >Start</label>
                   <!--<label>Birthday</label>
                    <input type="date" placeholder="Birthday" name="anniversaire">-->
					  <div id="datePickerBlock2" class="body collapse in">
				
				

                        <div class="col-lg-2">
                            <div class="input-group input-append  date" id="dpYears" data-date="12-02-2012"
                                 data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                <input class="form-control" type="text" value="12-02-2012"  name="ambauche" readonly="" />
                                <span class="input-group-addon add-on"><i class="icon-calendar"></i></span>
                           
                        </div>
						 </div>
						 </div>
                     </div>
                          <div class="form-group">
                         <label> Post number </label>
                         <input type="number" placeholder="Post Number" name="num_post" required = "required" class="form-control" />
                         </div>

                         <div class="form-group">
                         <label> Grade </label>   
                         <select name="id_grade">
							<?php
							require_once "connect_to_base.php";
							$query = "select * from grade " ;
							$result = mysqli_query($conn,$query) ;
							while ($row = mysqli_fetch_array($result)){
								echo "<option value='".$row["id_grade"]."'>".$row['type_grade']."</option>";
							}
							?>
						</select>						 
                       <!-- <input type="number" placeholder="grade" name="id_grade" required = "required" class="form-control" />-->
                        </div>
 
					 <BR/>
					 
                         <div class="form-group">
                         <label> RIB </label> 
                         <input type="number" placeholder="RIB" name="RIB" required = "required" class="form-control" />   
                         </div>

                        
						
						  
<input type="button" value="back" onclick="pagechange(3,2);">
  <input type="button" value="next" onclick="pagechange(3,4);">
						 
						  </div>
						  

                                   
               
                 
  <div id="formpage_4"  style="visibility: hidden; display: block; ..">             
               <h2>Agreement</h2>

                         <div class="form-group">
                         <label> User Name </label> 
                         <input type="text" placeholder="Username" name="login" required = "required" class="form-control" />
                         </div>

                         <div class="form-group">
                         <label> E-mail</label> 
                         <input type="email" placeholder="Your E-mail" name="mail" required = "required" class="form-control" />
                         </div>

                         <div class="form-group">
                         <label> Password </label> 
                          <input type="password" placeholder="password" name="password" required = "required" class="form-control" />
                          </div>

                           <div class="form-group">
                           <label> Retype Password </label> 
                           <input type="password" placeholder="Re type password" required = "required" class="form-control" />
                           </div>
						   
						   <input type="button" value="back" onclick="pagechange(4,3);">
 
     
     </div>
        </div>
		  </div>
      </div>
		
         <!--END PAGE CONTENT -->     
          
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->
	  <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/jquery-steps-master/lib/jquery.cookie-1.3.1.js"></script>
    <script src="assets/plugins/jquery-steps-master/build/jquery.steps.js"></script>   
    <script src="assets/js/WizardInit.js"></script>
         <!--END PAGE LEVEL SCRIPTS -->
		 <script src="assets/js/jquery-ui.min.js"></script>
 <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
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
				<!--END PAGE LEVEL SCRIPTS -->
				<!-------------------------------------------------------------------------------------
				-------------------------------------------------------------------------------------------
				------------------------------------------------------------------------------------------- -->
				 <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/jquery-steps-master/lib/jquery.cookie-1.3.1.js"></script>
    <script src="assets/plugins/jquery-steps-master/build/jquery.steps.js"></script>   
    <script src="assets/js/WizardInit.js"></script>
         <!--END PAGE LEVEL SCRIPTS -->
		 <script src="assets/js/jquery-ui.min.js"></script>
 <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="assets/js/formsInit.js"></script>

</body>
    <!-- END BODY -->
</html>
