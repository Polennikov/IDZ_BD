<?php
session_start();
require 'connect_Db.php';
        $sql = "INSERT INTO application (name_provider,number_pasport,date_application)
            VALUES (:name_provider,:number_passport,:date_application)";
        $result = $dbconn->prepare($sql);
        $result->bindValue(':name_provider', $_POST['name_provider']);
        $result->bindValue(':number_passport', $_SESSION['user'][1]);
        $result->bindValue(':date_application', date("Y-m-d"));
        $result->execute();
        Header("Location: ../application.php");


