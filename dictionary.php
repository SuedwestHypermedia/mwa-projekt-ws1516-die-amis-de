<?php 
$pageTitle = "Englisch Deutsch Wörterbuch";

include("inc/data.php");
include("inc/functions.php");
include("inc/header.php"); ?>



	<div id="wrapper">

		
			<?php
$servername = "db615743104.db.1and1.com";
$username = "dbo615743104";
$password = "54641954";
$dbname = "db615743104";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT word_in_source_lang, word_in_target_lang, word_type, sample_in_source_lang FROM dictionary WHERE word_in_source_lang LIKE 'a%'";
$result = $conn->query($sql);

?>
			
        		<!-- English -> German -->
				<section id="left">
				<!-- TITLE A -->
	        	<article id="word-begin">A</article>
        <?php

     if ($result->num_rows > 0) {
     

				while($row = $result->fetch_assoc()) {

				echo "<div class='word-container'>";
		     // output data of each row
			     echo "<div class='word-top-container'>";
			     	echo "<div class='word-top-container'>";
			     		echo "<div class='top-first'></div>";

		        echo "<div class='top-second'>" . $row["word_in_source_lang"]. "</div>";
				echo "<div class='top-third'>";
					echo "<div class='typ ". $row["word_type"]."'>" . $row["word_type"]. "</div>";
				echo "</div>";
				echo "<div class='top-fourth'>";
					echo "<div class='arrow-right'></div>";
				echo "</div>";
				echo "<div class='top-fifth'>" . $row["word_in_target_lang"]. "</div>";
				echo "<div class='top-sixth'>";
					echo "<div class='arrow-right-dark'></div>";
				echo "</div>";
				echo "<div class='top-seventh'>" . $row["sample_in_source_lang"]. "</div>";

						     echo "</div>";
		 		echo "</div>";
     			echo "</div>";
		     			}

				} else {
				     echo "0 results";
				}



				$conn->close();
				?>  
</section>

<?php
$servername = "db615743104.db.1and1.com";
$username = "dbo615743104";
$password = "54641954";
$dbname = "db615743104";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT word_in_source_lang, word_in_target_lang, word_type, sample_in_source_lang FROM dictionary_german WHERE word_in_source_lang LIKE 'a%'";
$result = $conn->query($sql);

?>
			
        		<!-- English -> German -->
				<section id="right">
				<!-- TITLE A -->
	        	<article id="word-begin">A</article>
        <?php

     if ($result->num_rows > 0) {
     

				while($row = $result->fetch_assoc()) {

				echo "<div class='word-container'>";
		     // output data of each row
			     echo "<div class='word-top-container'>";
			     	echo "<div class='word-top-container'>";
			     		echo "<div class='top-first'></div>";

		        echo "<div class='top-second'>" . $row["word_in_source_lang"]. "</div>";
				echo "<div class='top-third'>";
					echo "<div class='typ ". $row["word_type"]."'>" . $row["word_type"]. "</div>";
				echo "</div>";
				echo "<div class='top-fourth'>";
					echo "<div class='arrow-right'></div>";
				echo "</div>";
				echo "<div class='top-fifth'>" . $row["word_in_target_lang"]. "</div>";
				echo "<div class='top-sixth'>";
					echo "<div class='arrow-right-dark'></div>";
				echo "</div>";
				echo "<div class='top-seventh'>" . $row["sample_in_source_lang"]. "</div>";

						     echo "</div>";
		 		echo "</div>";
     			echo "</div>";
		     			}

				} else {
				     echo "0 results";
				}



				$conn->close();
				?>  
</section>

<?php
$servername = "db615743104.db.1and1.com";
$username = "dbo615743104";
$password = "54641954";
$dbname = "db615743104";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT word_in_source_lang, word_in_target_lang, word_type, sample_in_source_lang FROM dictionary WHERE word_in_source_lang LIKE 'b%'";
$result = $conn->query($sql);

?>
			
        		<!-- English -> German -->
				<section id="left">
				<!-- TITLE B -->
	        	<article id="word-begin">B</article>
        <?php

     if ($result->num_rows > 0) {
     

				while($row = $result->fetch_assoc()) {

				echo "<div class='word-container'>";
		     // output data of each row
			     echo "<div class='word-top-container'>";
			     	echo "<div class='word-top-container'>";
			     		echo "<div class='top-first'></div>";

		        echo "<div class='top-second'>" . $row["word_in_source_lang"]. "</div>";
				echo "<div class='top-third'>";
					echo "<div class='typ ". $row["word_type"]."'>" . $row["word_type"]. "</div>";
				echo "</div>";
				echo "<div class='top-fourth'>";
					echo "<div class='arrow-right'></div>";
				echo "</div>";
				echo "<div class='top-fifth'>" . $row["word_in_target_lang"]. "</div>";
				echo "<div class='top-sixth'>";
					echo "<div class='arrow-right-dark'></div>";
				echo "</div>";
				echo "<div class='top-seventh'>" . $row["sample_in_source_lang"]. "</div>";

						     echo "</div>";
		 		echo "</div>";
     			echo "</div>";
		     			}

				} else {
				     echo "0 results";
				}



				$conn->close();
				?>  
</section>

<?php
$servername = "db615743104.db.1and1.com";
$username = "dbo615743104";
$password = "54641954";
$dbname = "db615743104";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT word_in_source_lang, word_in_target_lang, word_type, sample_in_source_lang FROM dictionary_german WHERE word_in_source_lang LIKE 'b%'";
$result = $conn->query($sql);

?>
			
        		<!-- English -> German -->
				<section id="right">
				<!-- TITLE B -->
	        	<article id="word-begin">B</article>
        <?php

     if ($result->num_rows > 0) {
     

				while($row = $result->fetch_assoc()) {

				echo "<div class='word-container'>";
		     // output data of each row
			     echo "<div class='word-top-container'>";
			     	echo "<div class='word-top-container'>";
			     		echo "<div class='top-first'></div>";

		        echo "<div class='top-second'>" . $row["word_in_source_lang"]. "</div>";
				echo "<div class='top-third'>";
					echo "<div class='typ ". $row["word_type"]."'>" . $row["word_type"]. "</div>";
				echo "</div>";
				echo "<div class='top-fourth'>";
					echo "<div class='arrow-right'></div>";
				echo "</div>";
				echo "<div class='top-fifth'>" . $row["word_in_target_lang"]. "</div>";
				echo "<div class='top-sixth'>";
					echo "<div class='arrow-right-dark'></div>";
				echo "</div>";
				echo "<div class='top-seventh'>" . $row["sample_in_source_lang"]. "</div>";

						     echo "</div>";
		 		echo "</div>";
     			echo "</div>";
		     			}

				} else {
				     echo "0 results";
				}



				$conn->close();
				?>  
</section>


<?php
$servername = "db615743104.db.1and1.com";
$username = "dbo615743104";
$password = "54641954";
$dbname = "db615743104";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT word_in_source_lang, word_in_target_lang, word_type, sample_in_source_lang FROM dictionary WHERE word_in_source_lang LIKE 'c%'";
$result = $conn->query($sql);

?>
			
        		<!-- English -> German -->
				<section id="left">
				<!-- TITLE C -->
	        	<article id="word-begin">C</article>
        <?php

     if ($result->num_rows > 0) {
     

				while($row = $result->fetch_assoc()) {

				echo "<div class='word-container'>";
		     // output data of each row
			     echo "<div class='word-top-container'>";
			     	echo "<div class='word-top-container'>";
			     		echo "<div class='top-first'></div>";

		        echo "<div class='top-second'>" . $row["word_in_source_lang"]. "</div>";
				echo "<div class='top-third'>";
					echo "<div class='typ ". $row["word_type"]."'>" . $row["word_type"]. "</div>";
				echo "</div>";
				echo "<div class='top-fourth'>";
					echo "<div class='arrow-right'></div>";
				echo "</div>";
				echo "<div class='top-fifth'>" . $row["word_in_target_lang"]. "</div>";
				echo "<div class='top-sixth'>";
					echo "<div class='arrow-right-dark'></div>";
				echo "</div>";
				echo "<div class='top-seventh'>" . $row["sample_in_source_lang"]. "</div>";

						     echo "</div>";
		 		echo "</div>";
     			echo "</div>";
		     			}

				} else {
				     echo "0 results";
				}



				$conn->close();
				?>  
</section>

<?php
$servername = "db615743104.db.1and1.com";
$username = "dbo615743104";
$password = "54641954";
$dbname = "db615743104";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT word_in_source_lang, word_in_target_lang, word_type, sample_in_source_lang FROM dictionary_german WHERE word_in_source_lang LIKE 'c%'";
$result = $conn->query($sql);

?>
			
        		<!-- English -> German -->
				<section id="right">
				<!-- TITLE C -->
	        	<article id="word-begin">C</article>
        <?php

     if ($result->num_rows > 0) {
     

				while($row = $result->fetch_assoc()) {

				echo "<div class='word-container'>";
		     // output data of each row
			     echo "<div class='word-top-container'>";
			     	echo "<div class='word-top-container'>";
			     		echo "<div class='top-first'></div>";

		        echo "<div class='top-second'>" . $row["word_in_source_lang"]. "</div>";
				echo "<div class='top-third'>";
					echo "<div class='typ ". $row["word_type"]."'>" . $row["word_type"]. "</div>";
				echo "</div>";
				echo "<div class='top-fourth'>";
					echo "<div class='arrow-right'></div>";
				echo "</div>";
				echo "<div class='top-fifth'>" . $row["word_in_target_lang"]. "</div>";
				echo "<div class='top-sixth'>";
					echo "<div class='arrow-right-dark'></div>";
				echo "</div>";
				echo "<div class='top-seventh'>" . $row["sample_in_source_lang"]. "</div>";

						     echo "</div>";
		 		echo "</div>";
     			echo "</div>";
		     			}

				} else {
				     echo "0 results";
				}



				$conn->close();
				?>  
</section>
		
<?php
$servername = "db615743104.db.1and1.com";
$username = "dbo615743104";
$password = "54641954";
$dbname = "db615743104";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT word_in_source_lang, word_in_target_lang, word_type, sample_in_source_lang FROM dictionary WHERE word_in_source_lang LIKE 'd%'";
$result = $conn->query($sql);

?>
			
        		<!-- English -> German -->
				<section id="left">
				<!-- TITLE D -->
	        	<article id="word-begin">D</article>
        <?php

     if ($result->num_rows > 0) {
     

				while($row = $result->fetch_assoc()) {

				echo "<div class='word-container'>";
		     // output data of each row
			     echo "<div class='word-top-container'>";
			     	echo "<div class='word-top-container'>";
			     		echo "<div class='top-first'></div>";

		        echo "<div class='top-second'>" . $row["word_in_source_lang"]. "</div>";
				echo "<div class='top-third'>";
					echo "<div class='typ ". $row["word_type"]."'>" . $row["word_type"]. "</div>";
				echo "</div>";
				echo "<div class='top-fourth'>";
					echo "<div class='arrow-right'></div>";
				echo "</div>";
				echo "<div class='top-fifth'>" . $row["word_in_target_lang"]. "</div>";
				echo "<div class='top-sixth'>";
					echo "<div class='arrow-right-dark'></div>";
				echo "</div>";
				echo "<div class='top-seventh'>" . $row["sample_in_source_lang"]. "</div>";

						     echo "</div>";
		 		echo "</div>";
     			echo "</div>";
		     			}

				} else {
				     echo "0 results";
				}



				$conn->close();
				?>  
</section>

<?php
$servername = "db615743104.db.1and1.com";
$username = "dbo615743104";
$password = "54641954";
$dbname = "db615743104";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT word_in_source_lang, word_in_target_lang, word_type, sample_in_source_lang FROM dictionary_german WHERE word_in_source_lang LIKE 'd%'";
$result = $conn->query($sql);

?>
			
        		<!-- English -> German -->
				<section id="right">
				<!-- TITLE d-->
	        	<article id="word-begin">D</article>
        <?php

     if ($result->num_rows > 0) {
     

				while($row = $result->fetch_assoc()) {

				echo "<div class='word-container'>";
		     // output data of each row
			     echo "<div class='word-top-container'>";
			     	echo "<div class='word-top-container'>";
			     		echo "<div class='top-first'></div>";

		        echo "<div class='top-second'>" . $row["word_in_source_lang"]. "</div>";
				echo "<div class='top-third'>";
					echo "<div class='typ ". $row["word_type"]."'>" . $row["word_type"]. "</div>";
				echo "</div>";
				echo "<div class='top-fourth'>";
					echo "<div class='arrow-right'></div>";
				echo "</div>";
				echo "<div class='top-fifth'>" . $row["word_in_target_lang"]. "</div>";
				echo "<div class='top-sixth'>";
					echo "<div class='arrow-right-dark'></div>";
				echo "</div>";
				echo "<div class='top-seventh'>" . $row["sample_in_source_lang"]. "</div>";

						     echo "</div>";
		 		echo "</div>";
     			echo "</div>";
		     			}

				} else {
				     echo "0 results";
				}



				$conn->close();
				?>  
</section>

<?php
$servername = "db615743104.db.1and1.com";
$username = "dbo615743104";
$password = "54641954";
$dbname = "db615743104";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT word_in_source_lang, word_in_target_lang, word_type, sample_in_source_lang FROM dictionary WHERE word_in_source_lang LIKE 'e%'";
$result = $conn->query($sql);

?>
			
        		<!-- English -> German -->
				<section id="left">
				<!-- TITLE E -->
	        	<article id="word-begin">E</article>
        <?php

     if ($result->num_rows > 0) {
     

				while($row = $result->fetch_assoc()) {

				echo "<div class='word-container'>";
		     // output data of each row
			     echo "<div class='word-top-container'>";
			     	echo "<div class='word-top-container'>";
			     		echo "<div class='top-first'></div>";

		        echo "<div class='top-second'>" . $row["word_in_source_lang"]. "</div>";
				echo "<div class='top-third'>";
					echo "<div class='typ ". $row["word_type"]."'>" . $row["word_type"]. "</div>";
				echo "</div>";
				echo "<div class='top-fourth'>";
					echo "<div class='arrow-right'></div>";
				echo "</div>";
				echo "<div class='top-fifth'>" . $row["word_in_target_lang"]. "</div>";
				echo "<div class='top-sixth'>";
					echo "<div class='arrow-right-dark'></div>";
				echo "</div>";
				echo "<div class='top-seventh'>" . $row["sample_in_source_lang"]. "</div>";

						     echo "</div>";
		 		echo "</div>";
     			echo "</div>";
		     			}

				} else {
				     echo "0 results";
				}



				$conn->close();
				?>  
</section>


<?php
$servername = "db615743104.db.1and1.com";
$username = "dbo615743104";
$password = "54641954";
$dbname = "db615743104";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT word_in_source_lang, word_in_target_lang, word_type, sample_in_source_lang FROM dictionary_german WHERE word_in_source_lang LIKE 'e%'";
$result = $conn->query($sql);

?>
			
        		<!-- English -> German -->
				<section id="right">
				<!-- TITLE e -->
	        	<article id="word-begin">E</article>
        <?php

     if ($result->num_rows > 0) {
     

				while($row = $result->fetch_assoc()) {

				echo "<div class='word-container'>";
		     // output data of each row
			     echo "<div class='word-top-container'>";
			     	echo "<div class='word-top-container'>";
			     		echo "<div class='top-first'></div>";

		        echo "<div class='top-second'>" . $row["word_in_source_lang"]. "</div>";
				echo "<div class='top-third'>";
					echo "<div class='typ ". $row["word_type"]."'>" . $row["word_type"]. "</div>";
				echo "</div>";
				echo "<div class='top-fourth'>";
					echo "<div class='arrow-right'></div>";
				echo "</div>";
				echo "<div class='top-fifth'>" . $row["word_in_target_lang"]. "</div>";
				echo "<div class='top-sixth'>";
					echo "<div class='arrow-right-dark'></div>";
				echo "</div>";
				echo "<div class='top-seventh'>" . $row["sample_in_source_lang"]. "</div>";

						     echo "</div>";
		 		echo "</div>";
     			echo "</div>";
		     			}

				} else {
				     echo "0 results";
				}



				$conn->close();
				?>  
</section>

		
</div>
		
<?php include("inc/footer.php"); ?>