<?php
class PDO
{
public function connect()
}

// co serveur cefii
// define('SERVER' ,"sqlprive-pc2372-001.eu.clouddb.ovh.net:35167");
// define('USER' ,"cefiidev1325");
// define('PASSWORD' ,"f9i6KB7y");
// define('BASE' ,"personnage");

//co serveur local
public function __construct($server,$user,$password,$base){
$this ->SERVER = $server; //identification
$this ->USER = $user;//identification
$this ->PASSWORD = $password;//identification
$this ->base = $base;//identification
}

{
define('SERVER' ,"localhost");
define('USER' ,"root");
define('PASSWORD' ,"");
define('BASE' ,"personnages");
}

try {
    $connexion = new PDO("mysql:host=" .SERVER. ";dbname=".BASE, USER, PASSWORD);
}
// $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
catch (Exception $e) {
    echo "Erreur :" . $e->getMessage();
}