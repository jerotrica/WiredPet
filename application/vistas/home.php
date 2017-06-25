<?php
session_start();
require_once  __DIR__ . '/helper/facebookLogin/FacebookLogin.php';

if( isset($_SESSION['login']) && $_SESSION['login']){
    echo "<h3>Buenas " . $_SESSION['userName'] . "!</h3>";
} else {
    echo "<h3>Error: Usted no se encuentra logueado.</h3>";
    //header('Location: ./index.php');
}
?>