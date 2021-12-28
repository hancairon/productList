<!DOCTYPE HTML>  
<html lang="en">
    <head>
        <title>Assignment3</title>
        <meta charset="UTF-8">
		<style>
			<?php include "Style/layout.css"?>
		</style>	
    </head>
<?php
	// Connecting MySqli
	$con=mysqli_connect("127.0.0.1","assignment3","password","assignment3");
	if(mysqli_connect_error($con)) {
		echo "Connect failed", "<br>";
		echo "Cause: ", mysqli_connect_error();
		exit();
	}
	// Declaration Selecting data from Instrument table and Datail Table
	$sql = "SELECT * FROM instrument";
	$ret = mysqli_query ($con, $sql);
	$code = $_POST["code"];
	$name = $_POST["name"];
	$price = $_POST["price"];

	// Validating instrumentId and declarating instrumentId into $instrumentId
	if(isset($_POST['instrumentId'])){
    	$instrumentId = $_POST['instrumentId'];
    	switch ($instrumentId) {
        	case '1':
           		$instrumentId = 1;
            	break;
        	case '2':
            	$instrumentId = 2;
            	break;
			case '3':
				$instrumentId = 2;
				break;
    	}
	}
	$sql = "INSERT INTO detail (code, name, price, instrumentId) VALUES ('".$code."', '".$name."', '.$price.', '.$instrumentId.')";

	if(mysqli_query($con, $sql)){

		echo '<h1>Added Product</h1>';
		echo '<table>';
			echo '<tr>';
				echo '<th class="title">Categories</th>';
				echo '<th class="space"></th>';
				echo '<th class="title"></th>';
			echo '</tr>';
	
			echo '<tr>';
				echo '<th class="cate_left">';
					// Left menu for categories
					// It displays categories, such as Guitars or Basses.. 
					// By using while loop statement
					echo '<table class="cate_table">';
					while($row = mysqli_fetch_array($ret)) {
						echo '<tr>';
							   echo '<td>', '<a href="list.php?instrumentId=', $row['instrumentId'], '">', $row['instrumentName'], '</a>', '</td>'; 
						echo '</tr>';}
						echo '<tr>';						
						// Linking Adding product and Main page
						echo '<td><a href="insert.php"><input class="addBtn" type="button" id="add" value="Add Product"></a><br> 
						          <a href="index.php"><input class="addBtn" type="button" id="return" value="Go to Main"></a>
							  </td>';echo '<td></td>';
						echo '</tr>';
					echo '</table>';			
				echo '</th>';
				echo '<th class="space"></th>';	
				echo '<th class="list">';
					// Display added data	
					echo '<table class="detail_table">'; 
						echo '<th class="line, col1">', 'Code', '</th>', '<th class="line, col2">', 'Name', '</th>', '<th class="line, col3">', 'Price', '</th>';
						echo '<tr>';
						echo '<td class="line">', $code, '</td>', '<td class="line">', $name, '</td>', '<td class="line" style="text-align:right">', number_format($price,2), '</td>'; 
						echo '</tr>';
						echo 'Records added successfully.';
					echo '</table>';
					
				echo '</th>';
			echo '</tr>';
		echo '</table>';		
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
	mysqli_close($con);
?>
