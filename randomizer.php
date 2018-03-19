<?php
$challengers=array("Jacques","Jennifer","Jerome","Kevin","Philippe","Sebastien");
sort($challengers);
$winner = array_rand($challengers, 1);
echo "<p>$challengers[$winner]</p>";
?>

