<div><?php print $variable; ?> </div>


<?php foreach($weather as $city) {?>
    <div><?php print $city->cityname; ?></div>
    <div>Дата: <?php print $city->step->datetime; ?></div>
    <div>Температура: <?php print $city->step->temperature; ?></div>

<?php } ?>




