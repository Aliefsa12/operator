<?php

$arrNilai = array ("Ani" => 80,"Otim" => 90,"Sri" => 95,"Budi" => 85);

echo "<br>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

arsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan arsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";  

?>