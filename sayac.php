<?php

$myfile = fopen("sayac.txt", "r") or die("Unable to open file!");
rewind($myfile);
$sayac=2019;

while(!feof($myfile)) {
  fgets($myfile);
  $sayac++;
}
echo $sayac;
fclose($myfile);
?>