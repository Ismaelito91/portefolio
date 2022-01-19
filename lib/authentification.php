<?php
session_start();
if (! isset($authentification))
{
    if(isset($_SESSION['authentification']['id'])){
            header('location: '.WEBROOT.'   login.php');

    }
}

?>