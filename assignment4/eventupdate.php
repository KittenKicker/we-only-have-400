<!DOCTYPE html>
<html>
<head>
  <title>
    Event Form
  </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>
<body>
<?php
  $mysqli = new mysqli("localhost", "holl4332", "701774332", "holl4332");
  $result = $mysqli->query("SELECT * FROM Event WHERE Event_Key=". $_GET["event"]);
  $row = $result->fetch_assoc()
?>
<form id="myform" action="eventedit.php?event='<?php echo $_GET["event"]?>'" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="$row">
      <h1> Update Event Description </h1>
      <br/>
      <div class="form-group">
        <label for="title">Title: </label> <input class="form-control" id="title" name="title" type="text" value="<?php echo $row["Title"] ?>" readonly>
      </div>
      <div class="form-group">
        <label for="creator">Creator: </label><input readonly class="form-control" id="creator" name="creator" type="text" value="<?php echo $row["Creator"] ?>">
      </div>
      <div class="form-group">
        <label for="subject">Subject: </label>
        <select readonly class="form-control" id="subject" name="subject" value ="<?php echo $row["Subject"]?>">
          <option value="Culture">Culture</option>
          <option value="Music">Music</option>
          <option value="Society">Society</option>
          <option value="Contest">Contest</option>
          <option value="Festival">Festival</option>
          <option value="About">About</option>
        </select>
      </div>
      <div class="form-group">
        <label for="description">Description: </label><textarea class="form-control" id="description" name="description" maxlength="200"><?php echo $row["Description"]?></textarea>
      </div>
      <div class="form-group">
        <label for="publisher">Publisher: </label><input readonly class="form-control" id="publisher" name="publisher" type="text" value="<?php echo $row["Publisher"]?>">
      </div>
      <div class="form-group">
        <label for="contributor">Contributor: </label><input readonly class="form-control" id="contributor" name="contributor" type="text" value="<?php echo $row["Contributor"]?>">
      </div>
      <div class="form-group">
        <label for="date">Date: </label><input readonly class="form-control" id="date" name="date" type="date" value="<?php echo $row["Date"]?>">
      </div>
      <div class="form-group">
        <label for="language">Language: </label><input readonly class="form-control" id="language" name="language" type="text" value="<?php echo $row["Language"]?>">
      </div>
      <div class="form-group">
        <label for="rights">Rights: </label><textarea readonly class="form-control" id="rights" name="rights"><?php echo $row["Rights"]?></textarea>
      </div>
      <div class="form-group">
        <label for="longterm">Long-Term: </label> <input readonly type="checkbox" id="longterm" name="longterm" value="<?php echo $row["Long_Term"]?>">
      </div>
      <button type="submit" class="btn btn-default">Update Description</button>
    </div>
  </div>
</form>
</body>
</html>