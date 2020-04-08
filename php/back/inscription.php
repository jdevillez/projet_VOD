<?php


$nom = !empty($_POST['inom'])?$_POST['inom']:NULL;
$prenom = !empty($_POST['iprenom'])?$_POST['iprenom']:NULL;
$email = !empty($_POST['iemail'])?$_POST['iemail']:NULL;
$mdp = !empty($_POST['imdp'])?$_POST['imdp']:NULL;
$cmdp = !empty($_POST['cmdp'])?$_POST['cmdp']:NULL;





 if (!empty($mdp) && !empty($email) && !empty($cmdp) && !empty($prenom) && !empty($nom)) {
     if ($mdp === $cmdp) {
        $option = [
            'cost' => 10,
        ];
        $hashp = password_hash($mdp, PASSWORD_BCRYPT, $option);
     }

     include('../include/connectBDD.php');

     $c = $bdd->prepare("SELECT email FROM users WHERE email = :email");
     $c->execute(['email' => $email]);
     $result = $c->rowcount();

     if ($result == 0) {
        $q = $bdd->prepare ("INSERT INTO users (nom, prenom, email, mdp)
                        VALUES ( :nom, :prenom, :email, :mdp)");

         $q->execute(array(
      ':nom' => $nom,
      ':prenom' => $prenom,
      ':email' => $email,
      ':mdp' => $hashp,
     ));

        $q-> closeCursor();
       
        header('location:../../index.php');
     } else {
        echo "uncompte existe deja";
     }
    

 } else {
    echo "Les champs ne sont pas remplies";
 }



?>