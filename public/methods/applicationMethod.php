<?php
require 'connect_Db.php';
		$massApp = array();
        $sql = "SELECT * FROM application WHERE number_pasport=:number_passport;";
        $result = $dbconn->prepare($sql);
        $result->bindParam(':number_passport', $_SESSION['user'][1], PDO::PARAM_STR);
        $result->execute();
        while ($row1 = $result->fetch()) {
            array_unshift($massApp, $row1);
        }