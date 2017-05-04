<?php
if(!isset($_GET['login']) && !isset($_GET['password']))
{
  // header('Location: login.php');
   // Exit;
}
else
{
    // On va vérifier les variables
  
        require('connect_to_base.php'); // On réclame le fichier
       $password = $_GET['password'];
		$login = $_GET['login'];
 echo ' login='.$login.' and password ='.$password ;
       $sql = "SELECT * FROM utilisateur WHERE login=".$login.";";

        // On vérifie si ce login existe
        $requete_1 = mysqli_query($conn,$sql) or die ( "error connection" );
$num_rows=mysql_num_rows($requete_1);
        if($num_rows==0)
        {
            echo 'Ce login nexiste pas ! <br/>';
            echo '<a href="login.php" temp_href="login.php">Reessayer</a>';
            exit();
        }
        else
        {
            // On vérifie si le login et le mot de passe correspondent au compte utilisateur
            $requete_2 = mysql_query($sql." AND password='".mysql_escape_string($password)."'")
or die ( mysql_error() );

            if(mysql_num_rows($requete_2)==0)
            {
                // On va récupérer les résultats
                $result = mysql_fetch_array($requete_1, MYSQL_ASSOC);

                // On va récupérer la date de la dernière connexion
                $lastconnection = explode(' ', $result["dates"]);
                $lastjour = explode('-', $lastconnection[0]);

                // On va récupérer le nombre de tentative et l'affecter
                $nbr_essai = $result["nbr_connect"];

                if($lastjour[2]==date("d") && $MAX_essai==$nbr_essai)
                {
                    echo 'Vous avez atteint le quota de tentative, essayez demain !<br/>';
                    exit();
                }
                else
                {
                    $nbr_essai++;
                    $update = "UPDATE utilisateur SET nbr_connect='".$nbr_essai."', dates=NOW()
WHERE id_user='".$result["id_user"]."'";

                    mysql_query($update) or die ( mysql_error() );

                    echo 'Le mot de passe et/ou le login sont incorrectes <br/>';
                    echo '<a href="login.php" href="login.php">Réessayer</a>';
                    exit();
                }
            }
            else
            {
                // On va récupérer les résultats
                $result = mysql_fetch_array($requete_2, MYSQL_ASSOC);

                $nbr_essai = 0;
                $update = "UPDATE utilisateur SET nbr_connect='".$nbr_essai."', dates=NOW()
WHERE id_user='".$result["id_user"]."'";

                mysql_query($update) or die ( mysql_error() );

                // On redirige vers la partie membre
                header('Location: membres/login.php');
            
        }
    }
}
?>