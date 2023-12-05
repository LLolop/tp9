<?php
//des regex pour controler la saisie et extraire des sous-chaines

//application 1
$chaine='a99a';                         
var_dump(preg_match('/^[0-9]*$/', $chaine));    
//ne matche pas, FALSE(0)
//A VOUS : proposer-tester une chaine qui "matche"

//application 2
$chaine='06-31-32-33-34';   
var_dump(preg_match('/^0[1-68]([-. ]?[0-9]{2}){4}$/', $chaine));    
//matche, TRUE (1)
//A VOUS : proposer-tester une chaine qui ne "matche" pas

//application 3
$chaine='abcd';   
var_dump(preg_match('/^[a-zA-Z0-9]{5,}$/', $chaine));    
//ne matche pas, FALSE(0)
//A VOUS : proposer-tester une chaine qui "matche"

//application 4
$chaine='172.31.20.21';
var_dump(preg_match('/^84\.254(\.[0-9]{1,3}){2}$/', $chaine));    
//ne matche pas, FALSE(0)
//A VOUS : proposer-tester une chaine qui "matche"

//application 5
$chaine = "Jun 4 09:23:28 athos sshd[29792]: Failed password for root from 206.48.59.199 port 43540 ssh2";
preg_match('REGEX A COMPLETER', $chaine,$matches);
var_dump($matches);
//A VOUS : proposer-tester une REGEX qui extrait l'@IP 206.48.59.199

?>
