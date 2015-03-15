<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Request a Song</title>
    <link rel="shortcut icon" href="http://www.wkuf.fm/sites/default/files/favicon_0.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Player</a>
      <a class="navbar-brand" href="form.html">Song Upload</a>
      <a class="navbar-brand" href="requestlist.php">Request List</a>
    </div>
  </div>
</nav>
    <div>
        <div class="inputbox">
            <form id="requestFor" role="form" method="POST" action="songrequestadd.php">
                <h1>Request A Song</h1>
                <div class="form-group">
                    <label for="songTitleInput">Title</label>
                    <input class="form-control" type="text" name="title" id="songTitleInput" />
                </div>
                <div class="form-group">
                    <label for="artistInput">Artist</label>
                    <input class="form-control" type="text" name="artist" id="artistInput" />
                </div>
                <div class="form-group">
                    <label for="albumInput">Album</label>
                    <input class="form-control" type="text" name="album" id="albumInput" />
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery.validate.min.js"></script>
</body>
</html>
