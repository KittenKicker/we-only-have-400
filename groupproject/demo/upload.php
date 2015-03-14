<?php
$servername = "webtech.kettering.edu";
$username = "holl4332";
$password = "701774332";

$conn = new mysqli($servername, $username, $password, $username);


if(isset($_FILES["upload"])) {
	$target_dir = "audio/";
	$target_file = $target_dir . basename($_FILES["upload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
    echo "File already exists.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "mp3" && $imageFileType != "wma" && $imageFileType != "mp4") {
    echo "Sorry, only mp3, wma, and mp4 files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
		$conn->query("INSERT into Web_Project_Audio (DJ_Name, Date, File) VALUES ($_POST['name'], $_POST['datez'], $_FILES['upload']['name'])");
    } else {
        echo "Error: your file was not uploaded.";
    }
}
}
?>