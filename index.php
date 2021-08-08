<?php

include
    "header.php";

error_reporting(0);

switch ($_GET['page']) {
    default:
        include
            "home.php";
        break;

    case "home";
        include 'home.php';
        break;

    case "profile";
        include 'profile.php';
        break;

    case "login";
        include "login.php";
        break;

    case "permohonanpengunjung";
        include "permohonanpengunjung.php";
        break;

    case "grafik";
        include "grafik.php";
        break;

    case "undangundang";
        include "undangundang.php";
        break;

    case "jenisbibit";
        include "jenisbibit.php";
        break;
}
include 'footer.php';
