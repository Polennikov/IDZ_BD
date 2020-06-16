<?php
session_start();
require 'connect_Db.php';
 $sql = "INSERT INTO purchase (number_application,summ_purchase,numder_litres_purchase,number_station,name_fuel)
            VALUES (:number_application,:summ_purchase,:numder_litres_purchase,:number_station,:name_fuel)";
        $result = $dbconn->prepare($sql);
        $result->bindValue(':number_application', $_SESSION['App']);
        $result->bindValue(':summ_purchase', $_POST['summ']);
        $result->bindValue(':numder_litres_purchase', $_POST['number_liters']);
        $result->bindValue(':number_station', $_SESSION['station']);
        $result->bindValue(':name_fuel', $_POST['name_fuel']);
        $result->execute();
        Header("Location: ../purchase.php");