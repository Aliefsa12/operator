<?php

$arrNilai = array ("Ani" => 80,"Otim" => 90,"Sri" => 95,"Budi" => 85);

echo "<br>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

sort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan sort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";  

rsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan rsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

?>