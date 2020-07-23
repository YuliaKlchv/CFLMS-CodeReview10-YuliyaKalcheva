<?php 

	require_once 'db_connect.php';

	if(isset($_POST['Upload']))
	{
		$id= $_POST["hidden_id"];

			
			$ISBN =$_POST["ISBN"];
			$author_surname = $_POST["author_surname"];
			$author_first_name =$_POST["author_first_name"];
			$media_title =$_POST["media_title"];
			$media_type= $_POST["media_type"];
			$availability= $_POST["availability"];
			$publisher = $_POST["publisher"];
			$publish_date = $_POST["publish_date"];
			$description = $_POST["description"];
			$med_img=$_POST['med_img'];


			
		$sql = "UPDATE media SET ISBN=$ISBN, author_surname='$author_surname', author_first_name='$author_first_name', media_title='$media_title', media_type ='$media_type', availability='$availability', publisher='$publisher',publish_date='$publish_date', description='$description', med_img='$med_img' WHERE media_id={$id}";


		
		if ($conn->query($sql))
		{
			echo "Success";
			header("refresh:3; URL=../index.php");
			
		}else{
			echo $conn->error;
			echo "something is wrong";
		}
		
	}
	
	$conn->close();



 ?>