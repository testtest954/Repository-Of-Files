<?php
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check file size
if ($_FILES["fileToUpload"]["size"] > 999999999999999999999) {
  echo "too late our space will break down.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "there is an error while uploading file";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
	echo " <a href='http://localhost/randomlinks/files/". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). "'>Click here to dowmload</a>";
  } else {
    echo "There is no file you cannot upload without a file...";
  }
}
?>