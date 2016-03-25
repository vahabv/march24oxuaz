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
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
          
</head>
<body>
<form method="POST" action="" enctype="multipart/form-data">
 <div class="container">

	<div class="row">
		<div class="col s6">
	    	<input type="text" placeholder="News Title" name="newsTitle">
	    	</input>
      	</div>
		<div class="col s6">
			<input type="text" placeholder="News Description" name="newsDesc">
			</input>
		</div>
    </div>

	<div class="row">
		<div class="col s6">
	    	<input type="file" name="newsImg" id="exampleInputFile">
	    	</input>
      	</div>
		<div class="col s6">
			<input type="file" name="newsThumb" id="exampleInputFile">
			</input>
		</div>
    </div>

	
	<div class="row">
		<div class="col s6">
	    	<input type="date" placeholder="News TDate" name="newsDate">
	    	</input>
      	</div>
		<div class="col s6">
			<input type="time" name="newsTime">
			</input>
		</div>
    </div>
	
	<div class="row">
		<div class="col s6">
			<p>
			    <input type="radio" value="1" name="newsStatus" id="test1" />
			    <label for="test1">Publish</label>
		    </p>
     	</div>
		<div class="col s6">
			<p>
				<input type="radio" value="0" name="newsStatus" id="test2" />
				<label for="test2"> Not Publish</label>	
			</p>				

		</div>
    </div>
	
	
	<div class="row">
    	<div class="col s12">
    		<textarea name="newsText"></textarea>		
    	</div>
	</div>

	<div class="row">
    	<div class="col s12">
    		<input type="submit" name="submit"></input>	
    	</div>
	</div>
	
</div>
</form>
</body>
</html>