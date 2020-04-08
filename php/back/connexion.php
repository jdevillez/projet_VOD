<?php



$email = !empty($_POST['lemail'])?$_POST['lemail']:NULL;
$mdp = !empty($_POST['lmdp'])?$_POST['lmdp']:NULL;


include('../include/connectBDD.php');

if (!empty($mdp) && !empty($email)) { 

$q = $bdd->prepare("SELECT * FROM users WHERE email = :email");
$q->execute(['email' => $email]);

$result = $q->fetch();

if($result == true)
{
    $hashp = $result['mdp'];
    
    if(password_verify($mdp, $hashp)) {
        $_SESSION['username'] = $result['prenom'];
        setcookie('name', $result['prenom'], time(30 * 24 * 3600));
        header('location:../../index.php');
    } else {
        echo "le mot de passe n'est pas bon";
        header('location:../../index.php');
        }
}else {
    echo "l'email de compte n'existe pas";
    header('location:../../index.php');
}



} else {
    echo "Email et password non remplie";
    header('location:../../index.php');
}

?>