<!DOCTYPE html>
<html>
<body>
<p>Upload file here<p>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select any file to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload File" name="submit">
  <h1>The Repository Of Files</h1>
  <p>The Repository Of Files Is A Website of an file alternative for seeing images</p>
  <p>If you upload files here you can share files in there with your friends!</p>
  <h1>Link Of Files</h1>
  <p>It will be like this filesrepository/files/yourfilename.extension</p>
  <p>you can upload any file extension</p>
  <h1>File Spaces</h1>
  <p>you can upload files higher about gigabytes</p>
  <p>but if the file is big and almost full space of the website all files will be deleted</p>
  <p>you can't archive but if you got the file in your computer/Operating System you can reupload it</p>
  <p>because i cannot max the website space</p>
  <h1>Wiki Site</h1>
  <p>there will be a wiki site  <a href="wiki">here</a> so you can know the site
</form>
<button type="button" onclick="alertorsomethin()">Click Me</button>
<button type="button" onclick="testorwhat()">hey click for windwo open</button>
</body>
<script>
function alertorsomethin(){
	window.open('https://example.com')
}
function testorwhat(){
	proceed = confirm('Are you sure you want to unlock the secret? Please click ok to continue...');
	if(proceed){
		window.open('https://www.youtube.com', "name test is funny");
	}else{
		var myWindow = window.open("", "", "width=800,height=600");
		myWindow.document.write("<p>THERE IS NO MORE SECRET ITS ABOUT MONEY OOOOOOOH NOOOOOOOOOO</p>");
	}
	
}

</script>
<style>
body {font-family: Arial}
</style>
</html>