<?php
require 'vendor/autoload.php';
include('db.php');
include('common/header.php');

$page = $_GET['page'];

switch ($page){
    case 'home':
        include("home.php");
        break;
    case 'about':
        include("about.php");
        break;
    case 'contact':
        include("contact.php");
        break;
    case 'login':
        include("login.php");
        break;
    default:
        include("home.php");
}

include('common/footer.php');
?>