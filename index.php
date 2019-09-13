<html>
	<head>
		<title>The Big Library</title>
		<link rel="stylesheet" type="text/css" href="index.css">
		
	</head>
<body>

	<?php require_once 'actions/dbconnect.php';

 $sql = "SELECT id, Title, Image, Author, ISBN, Releasedate, Publisher, Type FROM media";
			$result = mysqli_query($connect, $sql);
			
			// fetch the next row (as long as there are any) into $row 
			while($row = mysqli_fetch_assoc($result)) {


						echo "<header><h1>The Big Library</h1></header>";


			   echo "<table class='table'>";
				   echo "<thead>
							<tr>
							<th>id</th>
							<th>Image></th>
							<th class='title'>Title</th>
							<th>Author</th>
							<th>ISBN</th>
							<th>Releasedate</th>
							<th>Publisher</th>
							<th>Type</th>
							
							</tr>
					</thead>";
					foreach ($result as $v1) { //loop for ROW
				  echo "<tr class='reihe'>";
					    foreach ($v1 as $v2) { //loop for CELL
					       echo "<td>$v2</td>";
					    }
				   echo "</tr>";
					}
				echo "</table>";

				echo "<div class='panel'>Admin Panel</div>";


			}
			//echo  "Fetched data successfully\n";
			// Free result set
			mysqli_free_result($result);
			// Close connection
			mysqli_close($connect);
		?>


		<div class="controls">

			<a href= "adddata.php"><button class="add" type="button">Add Media</button></a>

   <form action='update.php' method='get'>
   <input class="updateinput" type='number' name="id" value='<?php echo $id[0]; ?>'>
   <input class="update" type='submit' value='Update'>
</form>
   <form action='delete.php' method='get'>
   <input class="deleteinput" type='number' name="id" value='<?php echo $id[0]; ?>'>
   <input class="delete" type='submit' value='Delete'>

</form>
</div>
	</body>
</html>