<!DOCTYPE html>
<html>
<head>
  <title>Event Form</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
  $mysqli = new mysqli("localhost", "holl4332", "701774332", "holl4332");

  $sql = "UPDATE Event SET Description = '" . $_POST["description"] . "' WHERE Event.Event_Key = " . $_GET["event"];
  
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
<br/><a href="eventlist.php">Go back to list</a>
</body>
</html>
