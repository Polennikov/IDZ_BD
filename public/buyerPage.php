<?php
session_start();
require 'forms/header.php';
?>
<section>
    <div class="reg">
        <div class="ContentSection">
        	<div class="Content">
<h2>Текуший балл:</h2>
<h3> <? echo $_SESSION['user'][1] ?> </h3>
<h2>Имя пользователя:</h2>
<h3> <? echo $_SESSION['user'][2] ?> </h3>
<h2>Номер карты:</h2>
<h3> <? echo $_SESSION['user'][0] ?> </h3>
        </div>
         </div>
    </div>
 </section>