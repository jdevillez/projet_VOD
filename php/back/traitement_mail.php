<?php


$nom = !empty($_POST['nom'])?$_POST['nom']:NULL;
$email = !empty($_POST['mail'])?$_POST['mail']:NULL;
$adresse = !empty($_POST['adresse'])?$_POST['adresse']:NULL;
$telephone = !empty($_POST['telephone'])?$_POST['telephone']:NULL;
$sujet = !empty($_POST['sujet'])?$_POST['sujet']:NULL;
$to = "devillez@simplon-charleville.fr";
$subjet = "Formulaire";

if (!empty($nom) && !empty($email) && !empty($adresse) && !empty($email) && !empty($telephone) && !empty($sujet))
{
    $msg = "Nom: $nom\n";
  $msg .= "Email: $email\n";
  $msg .= "Adresse: $adresse\n";
  $msg .= "telephone: $telephone\n";
  $msg .= "message: $sujet\n";

  mail($to, $subjet, $msg);
  header('location:../../index.php');
  exit();
  
}
else {
    echo "Tous les champs doivent etre remplis";
  
}

?>





