<?php
error_reporting(0);

include 'header.php';

switch ($_GET['page']) {
  case "home";
    include 'home.php';
    break;
  case "profile";
    include 'profile.php';
    break;
  case "login";
    include "login.php";
    break;
  default:
    include "home.php";
    break;
}

include 'footer.php';
