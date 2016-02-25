<?php
function get_word_html($id, $en_word, $type, $ger_translation) {
	$output = "<li>" .$en_word. .$type. .$ger_translation."</li>";
	return $output;
}


function array_words($dictdb, category) {
	$output = array();

	foreach (dictdb as $id => $word)
}