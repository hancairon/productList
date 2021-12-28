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
	$choice = isset($_GET['instrumentId']) ? $_GET['instrumentId'] :'';
	$sqls = "SELECT * FROM detail WHERE instrumentId = '$choice'";
	$rets = mysqli_query ($con, $sqls);
	$sqlName = "SELECT * FROM instrument WHERE instrumentId = '$choice'";
	$retName = mysqli_query ($con, $sqlName);
	$row3 = mysqli_fetch_array($retName);

	echo '<h1>Product List</h1>';
	echo '<table>';
		echo '<tr>';
			echo '<th class="title">Categories</th>';
			echo '<th class="space"></th>';
			echo '<th class="title">'.$row3['instrumentName'].'</th>';
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
							  </td>';
						echo '<td> </td>';						
					echo '</tr>';
			echo '</table>';	
			echo '</th>';
			echo '<th class="space"></th>';	
			// Display list of instruments area
			// By using while loop statement
			echo '<th class="list">';
				echo '<table class="detail_table">';
					echo '<th class="line, col1">', 'Code', '</th>', '<th class="line, col2">', 'Name', '</th>', '<th class="line, col3">', 'Price', '</th>';
					while($row2 = mysqli_fetch_array($rets)) {
					echo '<tr>';
					echo '<td class="line">', $row2['code'], '</td>', '<td class="line">', $row2['name'], '</td>', '<td class="line" style="text-align:right">', number_format($row2['price'],2), '</td>'; 
					echo '</tr>';}
				echo '</table>';				
			echo '</th>';
		echo '</tr>';
	echo '</table>';
	
	mysqli_close($con);
?>
