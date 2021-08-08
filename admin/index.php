<?php
error_reporting(0);
session_start();

if (!isset($_SESSION['username'])) {
    header("location:../index.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <title>Persemaian Permanen</title>
    <style>
        body {
            margin-bottom: 6em;
        }

        * {
            font-size: 14px;
        }

        footer {
            position: fixed;
            /* height: 100px; */
            bottom: 0;
            width: 100%;
            background: #1fb359;
            padding: 10px 0;
            color: #fff;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 1.5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h3 class="mt-4 mb-4">Aplikasi Distribusi Bibit </h3>
        <div class="row">
            <div class="col-md-3 col-sm-12 mb-4">

                <?php
                include 'nav.php';
                ?>

            </div>

            <div class="col-md-9 col-sm-12">
                <?php

                include '../connection.php';

                switch ($_GET['page']) {

                    case "dashboard";
                        include "dashboard.php";
                        break;

                        // permohonan    
                    case "permohonan-show";
                        include "../permohonan/permohonan_show.php";
                        break;
                    case "permohonan-tambah";
                        include "../permohonan/permohonan_tambah.php";
                        break;
                    case "permohonan-edit";
                        include "../permohonan/permohonan_edit.php";
                        break;
                    case "permohonan-hapus";
                        include "../permohonan/permohonan_hapus.php";
                        break;
                    case "permohonan-update";
                        include "../permohonan/permohonan_update.php";
                        break;

                        // bibit 
                    case "bibit-tambah";
                        include "../bibit/bibit_tambah.php";
                        break;
                    case "bibit-show";
                        include "../bibit/bibit_show.php";
                        break;
                    case "bibit-kurang";
                        include "../bibit/bibit_pengurangan.php";
                        break;

                        //grafik
                    case "grafik";
                        include "../grafik.php";
                        break;

                    default:
                        include "dashboard.php";
                        break;
                }

                ?>
            </div>
        </div>
    </div>

    <footer>
        <div class="container ">
            <span>&copy; Persemaian Permanen Banjarbaru & BPDAS-HL BARITO 2021</span>
        </div>
    </footer>

</body>

</html>