<!DOCTYPE HTML>  
<html lang="en">
<head>
    <title>Assignment3</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/layout.css">
	<script src="Script/insertcheck.js"></script>	
</head>
<body>
	<h1>ADD NEW PRODUCT</h1>
    <!-- Form tag area to get information of instrument to add into new database
    insertcheck.js will check the input data has an valid format. -->
    <form name="form" method="POST" action="insert_result.php" onsubmit="return validate();">
        <label class="menu">Instrument Category:</label>
        <select class="selectBox" id="instrument" name="instrumentId" placeholder="">
            <option value="1">Guitars</option>
            <option value="2">Basses</option>
            <option value="3">Drums</option>
        </select> <br><br>
        <label class="menu" for="code">Instrument Code:</label>
        <input class="addBox" type="text" id="code" name="code" placeholder=""><br><br>
        <label class="menu" for="name">Intrument Name:</label>
        <input class="addBox" type="text" id="name" name="name" placeholder=""> <br><br>
		<label class="menu" for="price">Intrument price  :</label>
        <input class="addBox" type="text" id="price" name="price" placeholder="">  <br><br>
		<button class="addBtn" type="submit">Add Product</button>
        <!-- Button to go main page -->
        <a href="index.php"><input class="addBtn" type="button" id="return" value="Go to Main"></a>
    </form>
</body>
</html>
