<?php
//inclure un fichier 
include "config.php";
//appel fct
$base=connect();
//récuperation des donnees 
$e=$_REQUEST['email'];// faire attention a l'espace
$m=$_REQUEST['mdp'];
$mdpc=md5($m); //md5 crypte le mdp dans la bd
// insertion des données dans bd
//req sont des strings
//  id est null car il est auto increment qui tra null bech taamel autou=incremet
// insereu string ds bd il doit etre entre deux cotes 
$req="INSERT INTO users (id,email,password)VALUES(null,'$e','$m')";
// fct exec qui exécute INSERT,UPDATE,DELETE
//type de retour exec int ou bool
//int: si req s'est bien exécutée
//bool: false en cas d'echec 
$resp=$base->exec($req); // exec de req sur notre base ,el fléche hiya kima el pt fel java 
if ($resp==1){
    echo "données inséreés";
}
else { echo "veuillez vérifier l'insertion ds req ou fichier config";}



?>