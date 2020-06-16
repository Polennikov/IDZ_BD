<?php
session_start();
require 'connect_Db.php';
try {
    if(array_key_exists('Ok',$_POST)){
        if($_POST['check'] == 'Yes'){
            $sql1 = "SELECT * FROM worker WHERE login_worker=:log AND password_worker=:pass";
            $result = $dbconn->prepare($sql1);
            $result->bindParam(':log', $_POST['email'], PDO::PARAM_STR);
            $result->bindParam(':pass', $_POST['pass'], PDO::PARAM_STR);
            $result->execute();
            $row = $result->fetch();
            $_SESSION['user'] = $row;
            if($row==null){
               throw new Exception('Пользователя с такими данными не существует');
            }
            if($row[7]=="Admin")
            {
                    $_SESSION['station'] = $row[2];
                     Header("Location: ./../workerPage.php");
            }else if($row[7]=="bookkeeper"){
                Header("Location: ./../bookkeeperPage.php");
            }
            
        }else{
            $sql1 = "SELECT * FROM buyer WHERE login=:log AND password=:pass";
            $result = $dbconn->prepare($sql1);
            $result->bindParam(':log', $_POST['email'], PDO::PARAM_STR);
            $result->bindParam(':pass', $_POST['pass'], PDO::PARAM_STR);
            $result->execute();
            $row = $result->fetch();
            $_SESSION['user'] = $row;
            if($row==null){
               throw new Exception('Пользователя с такими данными не существует');
            }
            Header("Location: ./../buyerPage.php");
        }
    }
} catch (Exception $e) {
    $_SESSION['errorMessage']=$e->getMessage();
    Header("Location: ./../autorization.php");
}

