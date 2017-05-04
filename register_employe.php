<!DOCTYPE html>
<html>
<head>
<title>Ma page de traitement</title>
</head>
<body>
<?php
session_start();
require "connect_to_base.php";
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 //reccuperation des données
 if (!empty($_POST))
 {
 //if (isset($_POST['nom']) && isset($_POST['prenom'])) 
	// on affiche nos résultats
	//echo 'Votre nom est '.$_POST['cin'].' et votre fonction est '.$_POST['prenom'];
 
$Prenom=$_POST["prenom"];
$Nom=$_POST["nom"];
$CIN=$_POST["cin"];
$sexe=$_POST["sexe"];
$naissance=$_POST["anniversaire"];
$skype=$_POST["skype"];
$Matricule=$_POST["matricule"];
$Adresse=$_POST["adresse"];
$telephone=$_POST["telephone"];
$num_post=$_POST["num_post"];
$id_grade=$_POST["id_grade"];
$RIB=$_POST["RIB"];
$login=$_POST["login"];
$mail=$_POST["mail"];
$password=$_POST["password"];
$dateembauche=$_POST["ambauche"];
echo 'Votre nom est '.$naissance.' et votre prenom est '.$dateembauche ;

$req=" insert into employe(`CIN`,`Matricule`,`Nom`,`Prenom`,`Adresse`,`sexe`,`Mail`,`Skype`,`Telephone`,`Num_post`,`id_grade`,`RIB`,`login`,`password`,`date_naissane`,`date_embauche`) values(".$CIN.",'".$Matricule."','".$Nom."','".$Prenom."','".$Adresse."','".$sexe."','".$mail."','".$skype."',".$telephone.",".$num_post.",".$id_grade.",".$RIB.",'".$login."','".$password."','".$naissance."','".$dateembauche."');";
$result = mysqli_query($conn,$req) or die('Erreur requete insertion :');
if($result){ echo 'inscription fait sans probleme <br> vois identifiants sont désormais ';}
else {echo'echec insertion '.mysql_error();}
//mysqli_close($con);
//echo($result);


}
?>
</body>
</html>
