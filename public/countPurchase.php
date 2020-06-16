<?php
require 'methods/countPurchaseMethod.php';
?>
<section>
    <div class="reg">
        <div class="ContentSection">
 <? foreach ($massPur as $pur) { ?>
 	<form method="post" action="./../public/methods/updatePurchase.php" class="Content1">
 	Номер закупки:
 	 <input type="text" name="number_pur" id="number_pur" required value="<? echo $pur[3]; ?>">
 	  Сумма закупки:
 	 <input type="text" name="summ" id="summ" required value="<? echo $pur[1]; ?>">
 	  	Кол-во литров:
 	  	<input type="text" name="liters" id="liters" required value="<? echo $pur[2]; ?>">
 	  	Название топлива:
 	  	<input type="text" name="name_fuel" id="name_fuel" required value="<? echo $pur[5]; ?>">
 	<div>
                <input type="submit" name="Ok" value="Обновить"></input>
            </div>
             	<div>
                <input type="submit" name="del" value="Удалить"></input>
            </div>
 	 </form>
<? } ?>

        </div>
    </div>
 </section>