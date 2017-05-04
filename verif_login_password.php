  <?php
  session_start();
	require "connect_to_base.php";
	if (mysqli_connect_error())
  {
  die ("Failed to connect to MySQL: ");
  }
	if(isset($_POST['login'])&& isset($_POST['password']))
	{
	$login=$_POST['login'];
	$password=$_POST['password'];
	$requete2="select * from employe where `login`='".$login."' and `password`='".$password."';";
	
	//echo "select * from employe where login= ".$login."' and password='".$password."';";
	
	 echo '</BR> Votre login est '.$login.' et votre password est '.$password."</BR>";
	 
	$resultat=mysqli_query($conn,$requete2)or die("error");
	
	//echo 'Votre login est '.$login.' et votre pawwword est '.$password ;
	 // echo '<a href="login.php" temp_href="login.php">Reessayer</a>';
	  
	if($resultat){ echo ' selection fait sans probleme <br>';}
    else {echo'echec  '.mysql_error();}
	
	$donnees = mysqli_fetch_assoc($resultat);
	
	$nombre=mysqli_num_rows($resultat);

   if($nombre==1)
	{ 
	$_SESSION['utilisateur']=$donnees['login'];
	$_SESSION['nom']=$donnees['Nom'];
	$_SESSION['id']=$donnees['id'];
	header('location:dashbord.php');
	}
	
	else{
	header("location:login.php?error='error'");
	}
/*
	$tab=mysql_fetch_array($resultat);
	$nombre=mysql_num_rows($resultat);
	if($nombre==1)
	{ session_start();
	$_SESSION['utilisateur']=$tab['id'];
     header("location:dashbord.php");
	}
	//else{
	//header("location:login.php");}
	*/
	}
	?>
	
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
  
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
