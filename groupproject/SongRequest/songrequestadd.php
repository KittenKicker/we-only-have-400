<!DOCTYPE html>
<html>
<head>
  <title>Song Request Form</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
  $mysqli = new mysqli("localhost", "holl4332", "701774332", "holl4332");

  $sql = "INSERT INTO Web_Project_Requests (Title, Artist, album) VALUES ('" . $_POST["title"] ."', '" . $_POST["artist"] . "','" . $_POST["album"] . "')";
  
  if($mysqli->query($sql) === TRUE)
  {
     echo "Record added!";
  }
  else
  {
     echo "Record not added...";
  }
  $mysqli->close();

?>
<br/><a href="songrequest.php"><button>Go back to form</button></a>
</body>
</html>
