 <?php
 session_start();
#require 'methods/countFuelMethod.php';
?> 
<section>
    <div class="reg">
        <div class="ContentSection">
 	<form method="post" action="./../public/methods/buyerFormMethod.php" class="Content1">
 		 	  	Номер карты:
 	 <input type="text" name="number_card" id="number_card" required >
 	  	  	Топливо:
 	 <input type="text" name="name_fuel" id="name_fuel" required >
 	  	Количество литров:
 	 <input type="text" name="count_liters" id="count_liters" required >
 	  	Сумма покупки:
 	  	 <input type="text" name="summ" id="summ" required >
 	<div>
                <input type="submit" name="Ok" value="Совершить"></input>
            </div>
 	 </form>

        </div>
    </div>
 </section>