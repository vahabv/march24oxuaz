<?php 
include "model.php";
$newDb= new Database('localhost','root','','news');
if(isset($_POST['submit'])){
$newsTitle=$_POST['newsTitle'];
$newsDesc=$_POST['newsDesc'];
$newsImg=$_FILES['newsImg'];
$newsThumb=$_FILES['newsThumb'];
$newsDate=$_POST['newsDate'];
$newsStatus=$_POST['newsStatus'];
$newsText=$_POST['newsText'];
$newsTime=$_POST['newsTime'];
$newNews= new News($newsTitle, $newsDesc, $newsImg, $newsThumb, $newsDate, $newsStatus, $newsText, $newsTime);
$newNews->insertData($newDb->connection);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="" enctype="multipart/form-data">
	<input type="text" placeholder="News Title" name="newsTitle"></input>
	<input type="text" placeholder="News Description" name="newsDesc"></input>
	<input type="file" name="newsImg" id="exampleInputFile">
	<input type="file" name="newsThumb" id="exampleInputFile">
	<input type="date" placeholder="News TDate" name="newsDate"></input>
	<input type="time" name="newsTime"></input>
	<label>Publish</label>
	<input type="radio" value="1" name="newsStatus"></input>
	<label>Not Publish</label>
	<input type="radio" value="0" name="newsStatus"></input>
	<textarea name="newsText"></textarea>
	<input type="submit" name="submit"></input>
</form>
</body>
</html>