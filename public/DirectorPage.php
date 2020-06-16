<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AZS</title>
    <link rel="stylesheet" href="../lib/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <header>
        <div class="headerContent">
            <div class="textHeader">
                AZS
            </div>
            <div class="buttonContent">
                <div class="nameHeader">
                    <? if($_SESSION['station']!=null){
echo 'Станция: ';
echo $_SESSION['station'];
}

?>
                </div>
                <div class="buttonHeader">
                    <form method="post" action="methods/buttonHeader.php">
                        <input type="submit" name="main" id="main" value="Главная" class="button7"></input>
                        <?php
                        if ($_SESSION['user'] == null) {
                            echo '<input type="submit" name="reg" id="reg" value="" class="button7"></input>
                            <input type="submit" name="autorization" id="autorization" value="Войти" class="button7"></input>';
                        } else {
                            echo '<input type="submit" name="upBuy" id="upBuy" value="Первая покупка" class="button7"></input>
                            <input type="submit" name="out" id="out" value="Выйти" class="button7"></input>';
                        } ?>
                    </form>
                </div>
            </div>
        </div>
    </header>
        <?php
            echo'<h2>Продажа</h2>';
            require 'buyerForm.php';
        ?>
        <form method="post" action="methods/buttonHeader.php">
            <input type="submit" name="Applic" id="Applic" value="Заявка" class="button7"></input>
        </form>
    <footer>
    <div class="headerContent">
        <div class="textHeader">
        </div>
    </div>
</footer>
</div>
</body>
</html>