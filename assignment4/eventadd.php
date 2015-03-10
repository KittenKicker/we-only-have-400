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
  $longterm = 0 ;
  if($_POST["longterm"] = "on")
  {
    $longterm = 1;
  }

  $sql = "INSERT INTO Event (Title, Creator, Subject, Description, Publisher, Contributor, Date, Language, Rights, Long_Term) VALUES ('" . $_POST["title"] . "','". $_POST["creator"] ."','" . $_POST["subject"] . "','" . $_POST["description"] . "','" . $_POST["publisher"] . "','" . $_POST["contributor"]. "','" . $_POST["date"] . "','" . $_POST["language"] . "','" . $_POST["rights"] . "'," . $longterm . ")";
  
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
<br/><a href="eventform.php">Go back to form</a>
</body>
</html>
