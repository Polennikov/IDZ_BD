<?php
require 'methods/countFuelMethod.php';
?>
<section>
    <div class="reg">
        <div class="ContentSection">
 <? foreach ($massPoster as $post) { ?>
 	<form method="post" action="./../public/methods/updateFuel.php" class="Content1">
 	  	Топливо:
 	 <input type="text" name="name_fuel" id="name_fuel" required value="<? echo $post[1]; ?>">
 	  	Остаток:
 	  	<div>
 	  	 <input type="text" name="remains" id="remains" required value="<? echo $post[3]; ?>">
 	  	</div>
 	  	  	Максимум:
 	 <? echo $post[2]; ?>
 	</br>
 	<div>
                <input type="submit" name="Ok" value="Обновить"></input>
            </div>
 	 </form>
<? } ?>

        </div>
    </div>
 </section>