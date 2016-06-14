<?php
$str   = "Tôi tên là Lộc. Vợ tôi tên là Ngân.";
$str   = cleanString($str);
$str   = strtolower($str);
$array = array_filter(explode(".", $str));
foreach ($array as $sentence) {
	$words[] = array_filter(explode(' ', $sentence));
	foreach ($words as $word){
		$finalArray[] = preg_match_all('/./u', $word, $finalArray);
	}
}
echo '<pre>';
print_r(array_filter($words));
die;
function cleanString($text) {
	// 1) convert á ô => a o
	$text = preg_replace("/[áàâãªäậấẫầặắẵằ]/u", "a", $text);
	$text = preg_replace("/[ÁÀÂÃÄẬẤẪẦẶẮẴẰẲẨ]/u", "A", $text);
	$text = preg_replace("/[ÍÌÎÏĨỊỈ]/u", "I", $text);
	$text = preg_replace("/[íìîïĩịỉ]/u", "i", $text);
	$text = preg_replace("/[éèêëẹẽẻếềệễể]/u", "e", $text);
	$text = preg_replace("/[ÉÈÊËẸẼẺẾỀỆỄỂ]/u", "E", $text);
	$text = preg_replace("/[óòôõºöộọỏốồỗổơờớỡởợ]/u", "o", $text);
	$text = preg_replace("/[ÓÒÔÕÖỌỎỐỒỘỔỖƠỜỚỢỞỠ]/u", "O", $text);
	$text = preg_replace("/[úùûüũủụưứừữửự]/u", "u", $text);
	$text = preg_replace("/[Đ]/u", "D", $text);
	$text = preg_replace("/[đ]/u", "đ", $text);
	$text = preg_replace("/[ÚÙÛÜŨỦỤƯỮỰỬỨỪ]/u", "U", $text);
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

