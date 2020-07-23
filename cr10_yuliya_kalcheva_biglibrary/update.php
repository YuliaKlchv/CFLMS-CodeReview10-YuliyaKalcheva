<?php 

	require_once "actions/db_connect.php";

	if($_GET["id"])
	{
		$id = $_GET["id"];

		$sql = "SELECT * FROM media WHERE media_id = $id";
		$result = mysqli_query($conn, $sql);

		$row = $result->fetch_assoc();

	}
	$conn->close();
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Big Library</title>
 </head>
 <body>
 
	<form action="actions/a_update.php" method="post">
		<input type="hidden" name="hidden_id" value="<?php echo $row['media_id'] ?>"><br>
		<input type="text" name="ISBN" value="<?php echo $row['ISBN'] ?>"><br>
		<input type="text" name="author_surname" value="<?php echo $row['author_surname'] ?>"><br>
		<input type="text" name="med_img" value="<?php echo $row['med_img'] ?>"><br>
		<input type="text" name="author_first_name" value="<?php echo $row['author_first_name'] ?>"><br>
		<input type="text" name="media_title" value="<?php echo $row['media_title'] ?>"><br>
		<input type="text" name="media_type" value="<?php echo $row['media_type'] ?>"><br>
		<input type="text" name="availability" value="<?php echo $row['availability'] ?>"><br>
		<input type="text" name="publisher" value="<?php echo $row['publisher'] ?>"><br>
		<input type="text" name="publish_date" value="<?php echo $row['publish_date'] ?>"><br>
		<input type="text" name="description" value="<?php echo $row['description'] ?>"><br>

		<input type="submit" name="Upload" value="Upload">
	</form>


 </body>
 </html>