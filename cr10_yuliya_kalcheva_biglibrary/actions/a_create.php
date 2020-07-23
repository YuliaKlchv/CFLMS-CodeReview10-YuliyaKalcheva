<?php 

	require_once "db_connect.php";

	if($_POST)
	{
			$ISBN = $_POST["ISBN"];
			$author_surname = $_POST["author_surname"];
			$author_first_name =$_POST["author_first_name"];
			$media_title =$_POST["media_title"];
			$media_type= $_POST["media_type"];
			$availability= $_POST["availability"];
			$publisher = $_POST["publisher"];
			$publish_date = $_POST["publish_date"];
			$description = $_POST["description"];
			
		$sql = "INSERT INTO `media` (`ISBN`,`author_surname`,`author_first_name`,`media_title`,`media_type`,`availability`,`publisher`,`publish_date`,`description`) VALUES ('$ISBN','$author_surname','$author_first_name','$media_title','$media_type','$availability','$publisher','$publish_date ','$description')";

		if($conn->query($sql))
		{
			echo "Successfully created a new media .";
			header("refresh:3 ; URL=../index.php");
		}
		else
		{
			echo $conn->error;
		}
		
	$conn->close();


}
 ?>