<?php
session_start();
require 'connect_Db.php';
    if (array_key_exists('Ok', $_POST)) {
$sql = 'UPDATE purchase
   SET summ_purchase=:summ_purchase, numder_litres_purchase=:numder_litres_purchase, name_fuel=:name_fuel
 WHERE number_purchase='.$_POST['number_pur'].';';

        $result = $dbconn->prepare($sql);
        $result->bindValue(':summ_purchase', $_POST['summ']);
        $result->bindValue(':numder_litres_purchase', $_POST['liters']);
        $result->bindValue(':name_fuel', $_POST['name_fuel']);
        $result->execute();
        }
            if (array_key_exists('del', $_POST)) {

 $sql = 'DELETE FROM purchase
 WHERE number_purchase='.$_POST['number_pur'].';';
        $result = $dbconn->prepare($sql);
        $result->execute();

            }
            Header("Location: ./../purchase.php");