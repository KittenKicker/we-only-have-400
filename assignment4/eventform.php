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
<form id="myform" action="eventadd.php" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="row">
      <h1> Submit your Event || <a href="eventlist.php">Event List </a></h1>
      <br/>
      <div class="form-group">
        <label for="title">Title: </label> <input class="form-control" id="title" name="title" type="text" maxlength="50" required>
      </div>
      <div class="form-group">
        <label for="creator">Creator: </label><input class="form-control" id="creator" name="creator" type="text" maxlength="50" required>
      </div>
      <div class="form-group">
        <label for="subject">Subject: </label>
        <select class="form-control" id="subject" name="subject">
          <option value="Culture">Culture</option>
          <option value="Music">Music</option>
          <option value="Society">Society</option>
          <option value="Contest">Contest</option>
          <option value="Festival">Festival</option>
          <option value="About">About</option>
        </select>
      </div>
      <div class="form-group">
        <label for="description">Description: </label><textarea class="form-control" id="description" name="description" maxlength="200"></textarea>
      </div>
      <div class="form-group">
        <label for="publisher">Publisher: </label><input class="form-control" id="publisher" name="publisher" type="text" maxlength="50">
      </div>
      <div class="form-group">
        <label for="contributor">Contributor: </label><input class="form-control" id="contributor" name="contributor" type="text" maxlength="50">
      </div>
      <div class="form-group">
        <label for="date">Date: </label><input class="form-control" id="date" name="date" type="date">
      </div>
      <div class="form-group">
        <label for="language">Language: </label><input class="form-control" id="language" name="language" type="text" maxlength="2">
      </div>
      <div class="form-group">
        <label for="rights">Rights: </label><textarea class="form-control" id="rights" name="rights" maxlength="200"></textarea>
      </div>
      <div class="form-group">
        <label for="longterm">Long-Term: </label> <input type="checkbox" id="longterm" name="longterm">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</body>
</html>