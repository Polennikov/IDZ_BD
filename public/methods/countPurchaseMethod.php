<?php
session_start();
require 'connect_Db.php';
		$massPur = array();
        $sql = "SELECT * FROM purchase WHERE number_application=:number_application;";
        $result = $dbconn->prepare($sql);
        $result->bindParam(':number_application', $_SESSION['App'], PDO::PARAM_STR);
        $result->execute();
        while ($row = $result->fetch()) {
            array_unshift($massPur, $row);
        }

