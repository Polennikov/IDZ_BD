<?php
require 'connect_Db.php';
		$massWorker = array();
        $sql = "SELECT * FROM worker";
        $result = $dbconn->prepare($sql);
        $result->execute();
        while ($row = $result->fetch()) {
            array_unshift($massWorker, $row);
        }
