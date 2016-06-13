<?php
$str   = "Tôi tên là Lộc. Vợ tôi tên là Ngân.";
$array = array_filter(explode(".", $str));
//print_r($array);
foreach($array as $item) {
	$newitem[] = addcslashes($item, 'a..zA..Z');
}
print_r($newitem);
?>

