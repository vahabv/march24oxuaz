<?php 
include "model.php";
$newDb= new Database('localhost','root','','news');
 ?>
<!DOCTYPE html>
<html>
<head>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<title>
	</title>
</head>
<div class="container">
<table class=" highlight striped bordered">
	<tr>
		<td>Menu Id</td>
		<td>Menu Name</td>
		<td>Menu Url</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
<?php 
	$menuShow = new MenuShow($newDb->connection);
 ?>
</table>
</div>
<body>
</body>
</html>