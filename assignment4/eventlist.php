<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Proposal Database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>
            Events ||  <a href="eventform.php">Form</a>
        </h1>
        <hr/>
        <br/>
        <form id="myform" method="post">
        <div class="container">
          <div class="row">
            <h4> Search Filters </h4>
            <br/>
            <div class="form-group">
              <label for="creator">Creator: </label><input class="form-control" type="text" name="creator" id="creator">
            </div>
            <div class="form-group">
              <label for="subject">Subject: </label><input class="form-control" type="text" name="subject" id="subject">
            </div>
            <div class="form-group">
              <label for="publisher">Publisher: </label><input class="form-control" type="text" name="publisher" id="publisher">
            </div>
            <div class="form-group">
              <label for="date">Date: </label><input class="form-control" type="date" name="date" id="date">
            </div>
            <div class="form-group">
              <label for="language">Language: </label><input class="form-control" type="text" name="language" id="language" maxlength="2">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
          </div>
        </div>
        </form>
        <br/>
        <hr>
              <ul class="list-group">
        <?php

          error_reporting(E_ALL);
          ini_set('display_errors', 1);

          $creator = "";
          $subject = "";
          $publisher = "";
          $date = "NULL";
          $language = "";

          if(isset($_POST["creator"]))
          {
            $creator = $_POST["creator"];
          }
          if(isset($_POST["subject"]))
          {
            $subject = $_POST["subject"];
          }
          if(isset($_POST["publisher"]))
          {
            $publisher = $_POST["publisher"];
          }
          if(isset($_POST["date"]))
          {
            $date = $_POST["date"];
          }
          if(isset($_POST["language"]))
          {
            $language = $_POST["language"];
          }

          if($date == "")
          {
            $date = "NULL";
          }

            $mysqli = new mysqli("localhost", "holl4332", "701774332", "holl4332");
            $sql = "SELECT E.Event_Key, E.Title, E.Creator, E.Date FROM Event AS E WHERE E.Creator LIKE '%" . $creator . "%' AND E.Subject LIKE '%". $subject . "%' AND E.Publisher LIKE '%" . $publisher . "%' AND (E.Date = '" . $date . "' OR ISNULL(".$date.")) AND E.Language LIKE '%" . $language . "%'";
           
            //echo $sql;
            $result = $mysqli->query($sql);
            if (!$result)
            {
                throw new Exception("Database Error [{$result->database->errno}] {$result->database->error}");
            }
            else 
            {
              while($row = $result->fetch_assoc())
              {
               echo "<li class='list-group-item'><a href='eventupdate.php?event=" . $row["Event_Key"] . "'>" . $row["Title"] . "</a> Creator: " . $row["Creator"] . ", " . $row["Date"] . "</li>";
              }
            }
            
          // phpinfo();
        ?>
        </ul>
    </div>
</div>
</body>
</html>
