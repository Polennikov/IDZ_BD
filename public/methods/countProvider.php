<?php
require 'connect_Db.php';
		$massProv = array();
        $sql = "SELECT * FROM provider";
        $result = $dbconn->prepare($sql);
        $result->execute();
        while ($row = $result->fetch()) {
            array_unshift($massProv, $row);
        }