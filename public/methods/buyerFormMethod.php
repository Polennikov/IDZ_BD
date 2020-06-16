<?php
session_start();
/*echo $_SESSION['station'] ;
echo $_POST['number_card'];*/
require 'connect_Db.php';
 $sql = "INSERT INTO buy (numder_card,number_station,name_fuel,accrued_score,sum_buy,number_of_liters_buy,date_buy)
            VALUES (:numder_card,:number_station,:name_fuel,:accrued_score,:sum_buy,:number_of_liters_buy,:date_buy)";
        $result = $dbconn->prepare($sql);
        $result->bindValue(':numder_card', $_POST['number_card']);
        $result->bindValue(':number_station', $_SESSION['station']);
        $result->bindValue(':name_fuel', $_POST['name_fuel']);
        $result->bindValue(':accrued_score', $_POST['count_liters']);
        $result->bindValue(':sum_buy', $_POST['summ']);
        $result->bindValue(':number_of_liters_buy', $_POST['count_liters']);
        $result->bindValue(':date_buy', date("Y-m-d"));
        $result->execute();
        Header("Location: ../workerPage.php");
