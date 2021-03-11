<?php
$password = "admin";
$password_hash = password_hash($password, PASSWORD_DEFAULT);
echo $password_hash;

session_start();
session_destroy();
