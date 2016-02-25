<?php
function get_item_html($id, $item) {
	$output = "<li> 
					" . $item["english_word"]. " 
					" . $item["word_type"]. " 
					" . $item["german_translation"]. " 
					</li>";
	return $output;
}
