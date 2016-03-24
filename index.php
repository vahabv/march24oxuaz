<?php 
include "model.php";
$newDb= new Database('localhost','root','','news');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Oxu.az</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="navbar-fixed">
    <nav class="indigo darken-4">
	    <div class="container">
	      <div class="nav-wrapper">
	        <a href="#!" class="left brand-logo">oxu.az</a>
	        <ul class="right hide-on-med-and-down">
	          <li><a href="sass.html">Registration</a></li>
	          <li><a href="badges.html">Log in</a></li>
	        </ul>
	               <ul class="right hide-on-med-and-down">
	          <li><a href="index.php">Home</a></li>
	          <li><a href="badges.html">About</a></li>
	          <li><a href="badges.html">Contact</a></li>
	        </ul>
	      </div>
	     </div>
    </nav>
  </div>
  <hr>
  <div class="container">
  <div class="row">
	<?php 
		$showNews = new ShowDesc($newDb->connection);
	 ?>
      </div>
   </div>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
</html>