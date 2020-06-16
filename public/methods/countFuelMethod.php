<?php
require 'connect_Db.php';
		$massPoster = array();
        $sql = "SELECT * FROM presence_fuel WHERE number_station=:number_station;";
        $result = $dbconn->prepare($sql);
        $result->bindParam(':number_station', $_SESSION['station'], PDO::PARAM_STR);
        $result->execute();
        while ($row = $result->fetch()) {
            array_unshift($massPoster, $row);
        }

