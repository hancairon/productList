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

	// Declaration Selecting data from Instrument table 
	$sql = "SELECT * FROM instrument";
	$ret = mysqli_query ($con, $sql);

	// Body Part
	echo '<h1>Product List</h1>';
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
						echo '<td><a href="insert.php"><input class="addBtn" type="button" id="add" value="Add Product"></a></td>';
						echo '<td></td>';
					echo '</tr>';
				echo '</table>';			
			echo '</th>';
			echo '<th class="space"></th>';	

			// Area to display list of instruments
			echo '<th class="list">';
				echo '<table class="detail_table">';                
					echo 'Click instruments name to see lisk';
				echo '</table>';
				
			echo '</th>';
		echo '</tr>';
	echo '</table>';
	
	mysqli_close($con);
?>
