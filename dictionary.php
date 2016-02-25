<?php 
$pageTitle = "Englisch Deutsch Wörterbuch";

include("inc/data.php");
include("inc/functions.php");
include("inc/header.php"); ?>



	<div id="wrapper">

		<section>
			
			
			<ul>
				<?php 
				foreach($dictdb as $id => $item) {
					echo get_item_html($id, $item);
				}
				?>
			</ul>
				




		</section>

</div>
		
<?php include("inc/footer.php"); ?>