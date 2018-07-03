<?php

require_once '../global.inc.php';
require_once 'AdminTools.class.php';

$login = "";
$password = "";


if(isset($_POST['login-admin-form'])) { 

$login = $_POST['login'];
$password = $_POST['password'];

$adminTools = new AdminTools();
if($adminTools->login($login,$password,$link)){
header("Location: select/");
}
}
?>

