<?php
session_start();
require 'connect_Db.php';
try {
$row=1;
$number_card=null;
    if (array_key_exists('Ok', $_POST)) {
        while($row!=null){
            $number_card=rand(1000, 9999);
            $row=null;
            $sql1 = "SELECT * FROM worker WHERE numder_card=:card";
            $result = $dbconn->prepare($sql1);
            $result->bindParam(':card', $number_card, PDO::PARAM_STR);
            $result->execute();
            $row = $result->fetch();
        }

        $sql = "INSERT INTO buyer (numder_card,fio_buyer,login,password)
            VALUES (:numder_card,:fio_buyer,:login,:password)";
        $result = $dbconn->prepare($sql);
        $result->bindValue(':numder_card', $number_card);
        $result->bindValue(':fio_buyer', $_POST['name']);
        $result->bindValue(':login', $_POST['login']);
        $result->bindValue(':password', $_POST['pass']);
        $result->execute();


        Header("Location: ../workerPage.php");
    }
} catch (Exception $e) {
    $_SESSION['errorMessage'] = $e->getMessage();
    Header("Location: ../registration.php");
}



