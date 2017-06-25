<?php
/**
 * Created by PhpStorm.
 * User: fdaranno
 * Date: 29/5/17
 * Time: 21:13
 */

session_start();
require_once  __DIR__ . '/helper/facebookLogin/FacebookLogin.php';

$facebookLogin = new FacebookLogin();

if( !$facebookLogin->generateAccessToken() ){
    echo "Error al intentar login con facebook.";
    exit;
}
$_SESSION["autentic"] = true;
$_SESSION['fb_access_token'] = $facebookLogin->getFacebookAccessToken();
$_SESSION['login'] = true;
$_SESSION['userName'] = $facebookLogin->getUserName();
header("Location: application/../vistas/miCuenta.php");