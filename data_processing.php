<?php 
$bdd = mysqli_connect('localhost', 'amindb', 'azerty', 'saeko');
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$password = $_POST['password'];
$email = $_POST['email'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$postal = $_POST['postal'];
$telephone = $_POST['telephone'];
$pseudo = $_POST['pseudo'];
$action = $_POST['action'];

// etc

switch($action) {
  case 'inscription':
    require('account.html');
    $query = "INSERT INTO utilisateurs (prenom, nom, password, email, adresse, ville, postal, telephone, pseudo) 
    VALUES ('$prenom', '$nom', '$password', '$email', '$adresse', '$ville', '$postal', '$telephone', '$pseudo')";
    mysqli_query($bdd, $query)
    break;

  case 'connexion':
    //code
   break;
}

?>
