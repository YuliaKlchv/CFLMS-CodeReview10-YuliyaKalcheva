<?php

$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "cr10_yuliya_kalcheva_biglibrary";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "SELECT media_id, media_type,author_surname FROM media";
$result = mysqli_query($conn, $sql);
// fetch the next row (as long as there are any) into $row
while($row = mysqli_fetch_assoc($result)) {
       printf("ID=%s %s (%s)<br>",
                     $row[ "media_id"], $row["author_surname"],$row["media_type"]);
}
echo  "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);
// Close connection
mysqli_close($conn);
?>
