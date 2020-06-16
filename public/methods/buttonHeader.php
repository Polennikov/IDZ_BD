<?php
session_start();
if (array_key_exists('main', $_POST)) {
    Header("Location: ./../index.php");
}
if (array_key_exists('autorization', $_POST)) {
    Header("Location: ./../autorization.php");
}
if (array_key_exists('out', $_POST)) {
    unset($_SESSION['user'], $_SESSION['station'], $_SESSION['role']);
    Header("Location: ./../autorization.php");
}
if (array_key_exists('upBuy', $_POST)) {
    Header("Location: ./../registration.php");
}
if (array_key_exists('reg', $_POST)) {
    Header("Location: ./../registration.php");
}
if (array_key_exists('Applic', $_POST)) {
    Header("Location: ./../application.php");
}