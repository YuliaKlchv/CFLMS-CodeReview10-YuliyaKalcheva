<!DOCTYPE html>
<html>
<head>
	
	<title>Welcome to My Big Library</title> 

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">   
	<style type="text/css">
	body {
 background-image: url("images/book.jpg");
 background-color: #cccccc;
}
 
	div {
		width:100%;
		height: 50%
		background: url("library.jpg") no-repeat center center;
		background-color: hsla(89, 43%, 51%, 0.3);
		}

	img {
		width: 100%;
 		object-fit: cover;
	}
}
body {
  background-color: #fefbd8;
}

h1 {
  background-color: green;
}

span {
  background-color: green;
}


		
	</style>
</head>
<body>
	<hr>
	<h1 style="text-align: center; border: 5px solid red; position: fixed;left: 0%;top: 0%;width: 100%;color: solid;">Welcome to my LIBRARY</h1>

	<hr>
	<div>
	<img src="images/library.jpg" alt="library"><hr>

	</div>
	
<div class="container">
		<div class="row">

<?php
	include ("actions/db_connect.php");

	$sql = "SELECT * FROM media";
	$result = mysqli_query($conn,$sql);

	if($result->num_rows == 0){
		echo "No results";
	}elseif ($result->num_rows ==1 ){
		$row = $result->fetch_assoc();
		//*echo $row["media_id"]." ".$row["ISBN"]." ".$row["author_surname"]. " ".$row["author_first_name"]." ".$row["media_title"]." ".$row["media_type"]." ".$row["availability"]." ".$row["publisher"]." ".$row["publish_date"]." ".$row["description"]."[ <a href='update.php?id=".$value["media_id"] ."'>Update</a> ] - [ <a href='delete.php?id=".$value["media_id"] ."'>Delete</a> ] <br>";*//
		echo "<div class='card col-4 '>
  				<img class='card-img-top' src='".$value["med_img"]."' alt='Movie Image'>
  				<div class='card-body'>
    			<h5 class='card-title'>".$value["media_title"]."</h5>
    			<p class='card-text'>".$value["ISBN"]."</p>
    			<p class='card-text'>".$value["author_first_name"]."</p>
    			<p class='card-text'>".$value["author_surname"]."</p>
    			<p class='card-text'>".$value["media_type"]."</p>
    			<p class='card-text'>".$value["description"]."</p>
    			<p class='card-text'>".$value["publish_date"]."</p>
    			<p class='card-text'>".$value["publisher"]."</p>
    			<p class='card-text'>".$value["availability"]."</p>
    			<a href='update.php?id=".$value["media_id"]."' class='btn btn-primary'>Update</a>
    			<a href='delete.php?id=".$value["media_id"]."' class='btn btn-primary'>Delete</a>

  				</div>
				</div>";
	}else
		{
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $key => $value) 
			{
				//*echo $value["media_id"] . "  " .$value["ISBN"]." ". $value["author_surname"] . "  " . $value["author_first_name"]." ".$value["media_title"] . "  " . $value["media_type"] . " " . $value["availability"] . "  " . $value["publisher"] . "  " . $value["publish_date"] . "  " . $value["description"] ." [ <a href='update.php?id=".$value["media_id"] ."'>Update</a> ] - [ <a href='delete.php?id=".$value["media_id"] ."'>Delete</a> ] <br>";*//

				echo "<div class='card col-4 '>
  				<img class='card-img-top' src='".$value["med_img"]."' alt='Movie Image'>
  				<div class='card-body'>
    			<h5 class='card-title'>".$value["media_title"]."</h5>
    			<p class='card-text'>".$value["ISBN"]."</p>
    			<p class='card-text'>".$value["author_first_name"]."</p>
    			<p class='card-text'>".$value["author_surname"]."</p>
    			<p class='card-text'>".$value["media_type"]."</p>
    			<p class='card-text'>".$value["description"]."</p>
    			<p class='card-text'>".$value["publish_date"]."</p>
    			<p class='card-text'>".$value["publisher"]."</p>
    			<p class='card-text'>".$value["availability"]."</p>
    			<a href='update.php?id=".$value["media_id"]."' class='btn btn-primary'>Update</a>
    			<a href='delete.php?id=".$value["media_id"]."' class='btn btn-primary'>Delete</a>

  				</div>
				</div>";
			}
		}

		echo "</div>
		<hr>";


		echo "<div class='card-body'>
		<a href='create.php' class='btn btn-primary'>New media</a>
		</div>";

		$conn->close();

?>


<div class="footer">
  <p>All Rights Reserved</p>
</div>

</body>
</html>