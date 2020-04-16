<?php
try   {
$servername = "db5000303633.hosting-data.io";
$username = "dbu526547";
$password = "[&4zSW6x";
$dbname = "dbs296620";
  // Je me connecte à ma bdd
  $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}catch(Exception $e)
{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}


?>
