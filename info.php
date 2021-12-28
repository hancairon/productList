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
	$con=mysqli_connect("127.0.0.1","assignment3","password","assignment3");
	if(mysqli_connect_error($con)) {
		echo "Connect failed", "<br>";
		echo "Cause: ", mysqli_connect_error();
		exit();
	}
	
	$sql = "SELECT * FROM instrument";
	$sqls = "SELECT * FROM detail WHERE instrumentID=1";
	$ret = mysqli_query ($con, $sql);
	$rets = mysqli_query ($con, $sqls);

	echo '<h1>Product List</h1>';
	echo '<table>';
		echo '<tr>';
			echo '<th class="title">Categories</th>';
			echo '<th class="space"></th>';
			echo '<th class="title">Guitar</th>';
		echo '</tr>';

		echo '<tr>';
			echo '<th class="cate_left">';
				echo '<table class="cate_table">';
					while($row = mysqli_fetch_array($ret)) {
						echo '<tr>';
						echo '<td>', $row['instrumentName'], '</td>'; }
						echo '</tr>';
				echo '</table>';			
			echo '</th>';
			echo '<th class="space"></th>';		
			echo '<th class="list">';
				echo '<table class="detail_table">';
					echo '<th class="line">', 'Code', '</th>', '<th class="line">', 'Name', '</th>', '<th class="line">', 'Price', '</th>';
					while($row = mysqli_fetch_array($rets)) {
					echo '<tr>';
					echo '<td class="line">', $row['code'], '</td>', '<td class="line">', $row['name'], '</td>', '<td class="line">', $row['price'], '</td>'; }
					echo '</tr>';
				echo '</table>';
			echo '</th>';
		echo '</tr>';
	echo '</table>';
	
	mysqli_close($con);
?>



</html>

<!-- <?php
    echo "$".number_format($ListPrice, 2)
?> -->
            