<?php 
$myfile = fopen("ertek.txt", "r") or die(include_once "404.php");
 $line = fgets($myfile);
fclose($myfile);

?>