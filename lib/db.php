<?php
try {
$db = new PDO('mysql:host=localhost;dbname=portfolio' , 'root', '' );
$db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // recupere sous tableau associatif
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //erreure plus explicite
echo 'la connexiona réussi';
} catch (Exception $e) {
echo 'Échec lors de la connexion : ';
echo $e->getMessage();
die(); 
}
?> 