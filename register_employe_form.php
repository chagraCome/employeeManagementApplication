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
     <!-- PAGE LEVEL STYLES -->
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
<body >
<!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <img src="assets/img/logo.png" id="logoimg" alt=" Logo" />
    </div>
 <div class="tab-content">
          <div id="signup" class="tab-pane active">
             <form method="POST"  action="register_employe.php"class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                <input type="text" placeholder="First Name" name="prenom" required = "required" class="form-control" />
                <input type="text" placeholder="Last Name" name="nom" required = "required" class="form-control" />
				
                <input type="number" placeholder="CIN" name="cin" required = "required" class="form-control" />
				<br>
				<input type="radio" id="Homme" name="sexe" value="Homme">
				<label for="Homme" class="form-control">Homme</label> 
                <input type="radio" id="Femme" name="sexe" value="Femme"> 
		        <label for="Femme" class="form-control">Femme</label>
                <br>
				
						<br>
				
				<!--<input type="date" placeholder="Birthday" name="anniversaire">-->
				<input type="text" placeholder="Skype" name="skype" required = "required" class="form-control" />
				<input type="text" placeholder="Matricule" name="matricule" required = "required" class="form-control" />
				<input type="text" placeholder="Adress" name="adresse" required = "required" class="form-control" />
				<input type="number" placeholder="Telephone" name="telephone" required = "required" class="form-control" />
				<input type="number" placeholder="Post Number" name="num_post" required = "required" class="form-control" />
				<input type="number" placeholder="grade" name="id_grade" required = "required" class="form-control" />
				<br>
				<input type="date" name="ambauche">
				 <input type="number" placeholder="RIB" name="RIB" required = "required" class="form-control" />   
				<input type="text" placeholder="Username" name="login" required = "required" class="form-control" />
                <input type="email" placeholder="Your E-mail" name="mail" required = "required" class="form-control" />
                <input type="password" placeholder="password" name="password" required = "required" class="form-control" />
                <input type="password" placeholder="Re type password" required = "required" class="form-control" />
                <button class="btn text-muted text-center btn-success" name="submit" type="submit">Register</button>
            </form>
          </div>
		</div>
		</div>
		 <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
