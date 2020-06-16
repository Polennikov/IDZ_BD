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
                        <input type="submit" name="out" id="out" value="Выйти" class="button7"></input>
                    </form>
                </div>
            </div>
        </div>
    </header>

        <form method="post" action="printBuy.php" class="Content">
            <h2>Продажи за месяц и год:</h2>
            </br>
            Месяц:
            <input type="text" name="month" id="month" required>
            Год:
             <input type="text" name="year" id="year" required>
            <input type="submit" name="buy" id="buy" value="показать" class="button7"></input>
        </form>
        <form method="post" action="printApp.php" class="Content">
            <h2>Заявки за месяц и год:</h2>
            </br>
            Месяц:
            <input type="text" name="month" id="month" required>
            Год:
             <input type="text" name="year" id="year" required>
            <input type="submit" name="buy" id="buy" value="показать" class="button7"></input>
        </form>
        <form method="post" action="reportDate.php" class="Content">
            <h2>Формирование отчета в период:</h2>
            </br>
            От:
            <input type="date" name="date1" id="date1" required>
            По:
             <input type="date" name="date2" id="date2" required>
            <input type="submit" name="buy" id="buy" value="Сформировать" class="button7"></input>
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