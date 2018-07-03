<?php


require_once 'Database.class.php';
require_once 'admin/AdminTools.class.php';



$db = new Database();
$link = $db->connect();
session_start();


?>