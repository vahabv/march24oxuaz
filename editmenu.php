<?php 
include "model.php";
$newDb= new Database('localhost','root','','news');
$menuid=$_GET['id'];
if(isset($_POST['submit'])){
	$editedMenuName=$_POST["newMenuName"];
	$editedMenuUrl=$_POST["newMenuUrl"];
	$editMenu = new EditMenu($newDb->connection, $editedMenuName, $editedMenuUrl);
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
<?php 
$showEditingMenu = new showEditingMenu($newDb->connection, $menuid);
 ?>
</body>
</html>