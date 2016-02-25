<?php 
$pageTitle = "Englisch Deutsch Wörterbuch";

include("inc/data.php");
include("inc/functions.php");
include("inc/header.php"); ?>



	<div id="wrapper">

		<section>
			<ul>
				<?php 
				foreach($dictdb as $id => $en_word) {
					echo get_word_html($id, $en_word, $type, $ );
				}
				?>
			</ul>
		</section>

</div>
		
<?php include("inc/footer.php"); ?>