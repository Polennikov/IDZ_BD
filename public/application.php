<?php
session_start();
require 'forms/header.php';
require 'methods/countFuelMethod.php';
require 'methods/applicationMethod.php';
require 'methods/countProvider.php';
?>
<h2>Наличие топлива</h2>
<section>
    <div class="reg">
        <div class="ContentSection">
 <? foreach ($massPoster as $post) { ?>
 	<div class="Content1">
 	  	Топливо:
 	 <input type="text" name="name_fuel" id="name_fuel" required value="<? echo $post[1]; ?>">
 	  	Остаток:
 	  	<div>
 	  	 <input type="text" name="remains" id="remains" required value="<? echo $post[3]; ?>">
 	  	</div>
 	  	  	Максимум:
 	 <? echo $post[2]; ?>
 	</br>
 	 </div>
<? } ?>

        </div>
    </div>
 </section>

<h2>Заявки</h2>
<section>
    <div class="reg">
        <div class="ContentSection">
 <? foreach ($massApp as $App) { ?>
 	<form method="post" action="./../public/purchase.php" class="Content1">
 		 	  	Номер заявки:
 	 <input type="text" name="number_app" id="number_app" required value="<? echo $App[0]; ?>">
 	  	Поставщик:
 	 <input type="text" name="provider" id="provider" required value="<? echo $App[1]; ?>">
 	  	Дата завки:
 	  	 <input type="text" name="remains" id="remains" required value="<? echo $App[3]; ?>">
 	  	 <input type="submit" name="provider" id="provider" value="Закупка"></input>
 	  	 <input type="submit" name="del" id="del" value="Удалить"></input>
 	  	 <input type="submit" name="send" id="send" value="Отправка заявки"></input>
 	</br>
 	</form>
<? } ?>

        </div>
    </div>

 </section>

<h2>Поставщики</h2>
<section>
    <div class="reg">
        <div class="ContentSection">
 <? foreach ($massProv as $Prov) { ?>
 	<form method="post" action="./../public/purchase.php" class="Content1">
 		 	  	Адрес поставщика:
 	 <input type="text" name="number_app" id="number_app" required value="<? echo $Prov[0]; ?>">
 	  	Наименование организации:
 	 <input type="text" name="number_app" id="number_app" required value="<? echo $Prov[1]; ?>">
 	</br>
 	</form>
<? } ?>

        </div>
    </div>

 </section>

 <h2>Создать заявку</h2>
<section>
    <div class="reg">
        <div class="ContentSection">

 	<form method="post" action="./../public/methods/applicationCreateMethod.php" class="Content">
 	  	Поставщик:
 	 <input type="text" name="name_provider" id="name_provider" required>

 	 <input type="submit" name="provider" id="provider" value="Создать" class="button7"></input>
   
    
 	 </form>

        </div>
    </div>
    
 </section>