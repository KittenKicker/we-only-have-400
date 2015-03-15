<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Player</a>
          <a class="navbar-brand" href="songrequest.php">Song Request</a>
          <a class="navbar-brand" href="form.html">Song Upload</a>
        </div>
      </div>
    </nav>
<div class="container">
  <div class="row">
    <h3>Requests</h3>
    <hr>
    <ul class="list-group">
      <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $mysqli = new mysqli("localhost", "holl4332", "701774332", "holl4332");
        $sql = "SELECT * FROM Web_Project_Requests";

        $result = $mysqli->query($sql);

        while($row = $result->fetch_assoc())
        {
          echo "<li class='list-group-item'><span style='font-weight:bold'>Title: </span>" . $row["Title"] . "<br/><span style='font-weight:bold'>Artist: </span>" . $row["Artist"] . "<br/><span style='font-weight:bold'>Album: </span>" . $row["Album"] . "</li>";
        }
      ?>
    </ul>
  </div>
</body>
</html>