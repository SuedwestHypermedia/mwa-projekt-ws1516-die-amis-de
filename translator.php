<?php 
$pageTitle = "Englisch Deutsch Übersetzer";

include("inc/header.php"); ?>


	<div id="wrapper">

		<section id="left">

<?php
	// Google Translate API Key
    $apiKey = 'AIzaSyDlCChtJMBUatdS16Ags8NnT0FAwbEoTGU';
    $text = 'Oh my gosh, I never imagined the food would be this great!';
    $url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey . '&q=' . rawurlencode($text) . '&source=en&target=de';

    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($handle);
    $responseDecoded = json_decode($response, true);	// Dekodiert eine JSON-Zeichenkette
    $responseCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);	//Here we fetch the HTTP response code
    curl_close($handle);

    if($responseCode != 200) {
        echo 'Fetching translation failed! Server response code:' . $responseCode . '<br>';
        echo 'Error description: ' . $responseDecoded['error']['errors'][0]['message'];
    }
    else {
        echo 'Deutsch: ' . $text . '<br>';
        echo 'Englisch: ' . $responseDecoded['data']['translations'][0]['translatedText'];
    }
?>

<br>
<?php
	// Google Translate API Key
    $apiKey = 'AIzaSyDlCChtJMBUatdS16Ags8NnT0FAwbEoTGU';
    $text = 'Oh, I am trying to figure out how to make this microphone work better.';
    $url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey . '&q=' . rawurlencode($text) . '&source=en&target=de';

    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($handle);
    $responseDecoded = json_decode($response, true);	// Dekodiert eine JSON-Zeichenkette
    $responseCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);	//Here we fetch the HTTP response code
    curl_close($handle);

    if($responseCode != 200) {
        echo 'Fetching translation failed! Server response code:' . $responseCode . '<br>';
        echo 'Error description: ' . $responseDecoded['error']['errors'][0]['message'];
    }
    else {
        echo 'Deutsch: ' . $text . '<br>';
        echo 'Englisch: ' . $responseDecoded['data']['translations'][0]['translatedText'];
    }
?>


		</section>

		<section id="right">
<?php
	// Google Translate API Key
    $apiKey = 'AIzaSyDlCChtJMBUatdS16Ags8NnT0FAwbEoTGU';
    $text = 'Ich hasse es, meine eigene Stimme zu hören.';
    $url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey . '&q=' . rawurlencode($text) . '&source=de&target=en';

    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($handle);
    $responseDecoded = json_decode($response, true);	// Dekodiert eine JSON-Zeichenkette
    $responseCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);	//Here we fetch the HTTP response code
    curl_close($handle);

    if($responseCode != 200) {
        echo 'Fetching translation failed! Server response code:' . $responseCode . '<br>';
        echo 'Error description: ' . $responseDecoded['error']['errors'][0]['message'];
    }
    else {
        echo 'Deutsch: ' . $text . '<br>';
        echo 'Englisch: ' . $responseDecoded['data']['translations'][0]['translatedText'];
    }
?>

<br>

<?php
	// Google Translate API Key
    $apiKey = 'AIzaSyDlCChtJMBUatdS16Ags8NnT0FAwbEoTGU';
    $text = 'Am meisten vermisse ich das deutsche Brot.';
    $url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey . '&q=' . rawurlencode($text) . '&source=en&target=de';

    $handle = curl_init($url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($handle);
    $responseDecoded = json_decode($response, true);	// Dekodiert eine JSON-Zeichenkette
    $responseCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);	//Here we fetch the HTTP response code
    curl_close($handle);

    if($responseCode != 200) {
        echo 'Fetching translation failed! Server response code:' . $responseCode . '<br>';
        echo 'Error description: ' . $responseDecoded['error']['errors'][0]['message'];
    }
    else {
        echo 'Deutsch: ' . $text . '<br>';
        echo 'Englisch: ' . $responseDecoded['data']['translations'][0]['translatedText'];
    }
?>
		</section>

</div>
		
<?php include("inc/footer.php"); ?>