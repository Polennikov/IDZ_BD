<?php
session_start();

require 'connect_Db.php';
 $sql1 = "UPDATE presence_fuel
   SET remains_fuel=:remains_fuel WHERE number_station=:number_station AND name_fuel=:name_fuel;";
            $result = $dbconn->prepare($sql1);
            $result->bindParam(':number_station', $_SESSION['station'], PDO::PARAM_STR);
            $result->bindParam(':name_fuel', $_POST['name_fuel'], PDO::PARAM_STR);
            $result->bindParam(':remains_fuel', $_POST['remains'], PDO::PARAM_STR);
            $result->execute();
            Header("Location: ./../workerPage.php");