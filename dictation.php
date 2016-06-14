<?php
$str   = "Tôi tên là Lộc. Vợ tôi tên là Ngân.";
$str   = cleanString($str);
$array = array_filter(explode(".", $str));
//print_r($array);
$results = array();
foreach($array as $item) {
	//	$newitem[] = addcslashes($item, 'a..zA..Z');
	preg_match_all('/./u', $str, $results);
}
function cleanString($text) {
	// 1) convert á ô => a o
	$text = preg_replace("/[áàâãªäậấẫầặắẵằ]/u", "a", $text);
	$text = preg_replace("/[ÁÀÂÃÄẬẤẪẦẶẮẴẰẲẨ]/u", "A", $text);
	$text = preg_replace("/[ÍÌÎÏĨỊỈ]/u", "I", $text);
	$text = preg_replace("/[íìîïĩịỉ]/u", "i", $text);
	$text = preg_replace("/[éèêëẹẽẻếềệễể]/u", "e", $text);
	$text = preg_replace("/[ÉÈÊËẸẼẺ]/u", "E", $text);
	$text = preg_replace("/[óòôõºöộ]/u", "o", $text);
	$text = preg_replace("/[ÓÒÔÕÖ]/u", "O", $text);
	$text = preg_replace("/[úùûü]/u", "u", $text);
	$text = preg_replace("/[ÚÙÛÜ]/u", "U", $text);
	$text = preg_replace("/[’‘‹›‚]/u", "'", $text);
	$text = preg_replace("/[“”«»„]/u", '"', $text);
	$text = str_replace("–", "-", $text);
	$text = str_replace(" ", " ", $text);
	$text = str_replace("ç", "c", $text);
	$text = str_replace("Ç", "C", $text);
	$text = str_replace("ñ", "n", $text);
	$text = str_replace("Ñ", "N", $text);
	return $text;
}

print_r(($results));
?>