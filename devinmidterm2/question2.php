<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<form method="post">
<h2>Input Name and Birthdate</h2>
<p> 
   Name: <input type="text" name="name" required>
   <br><br>
   Birthdate (mm/dd/yyyy): <input type="date" name="birthdate" required>
   <input type="submit" name="submit" value="Submit">  
</form>
<br/>
<br/>
<?php

function getAge($birthdate)
{
  $birthdate = strtotime(str_replace("-","-", $birthdate));
  $date = time();

  $age = 0;
  while($date > $birthdate = strtotime('+1 year', $birthdate))
  {
    $age++;
  }
  return $age;
}

if(isset($_POST["name"]))
{
  echo "<h2>Name: " . $_POST["name"] . "</h2>";
}
echo "<br/<br/>";
if(isset($_POST["birthdate"]))
{
  $bday = $_POST["birthdate"];
  echo "<h2>Age: " . getAge($bday) . "</h2>";
}
?>

</body>
</html>