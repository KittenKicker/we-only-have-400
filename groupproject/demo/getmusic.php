<?php
$array = array();

$date;
$ayy = json_decode($_POST['data']);

if($ayy[1] == "")
{
  $date = "NULL";
}
else
{
  $date = $ayy[1];
}

$mysqli = new mysqli("localhost", "holl4332", "701774332", "holl4332");
$sql = "SELECT WPA.DJ_Name, WPA.File, WPA.Date FROM Web_Project_Audio AS WPA WHERE WPA.DJ_Name LIKE '%" . $ayy[0] . "%' AND (WPA.Date = '" . $date . "' OR ISNULL(" . $date . "))";
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc())
{
  array_push($array, $row["File"]);
  array_push($array, $row["DJ_Name"] . " " . $row["Date"]);
}

echo json_encode($array);
?>