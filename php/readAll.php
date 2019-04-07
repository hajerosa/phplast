<?php
//inclure un fichier 
include "config.php";
//appel fct
$base=connect();

$req="SELECT * FROM users";
//query exéute select seulement 
//result contient plusieurs données 
// fetchobject i7ot el ligne fi objet ou i7ot l'objet fi user.données est maintenant sous format d'un objet
//fetchAssoc
$result=$base-> query($req);
while ($user=$result-> fetchobject()){
    echo $user-> email." ".$user->password.<br>;

}

?>