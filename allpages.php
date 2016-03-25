<?php

include "db.php";

$sql="SELECT * FROM pages";

$allpages=mysqli_query($conn,$sql); 


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="materialize.min.css">
</head>
<body>
<table class="responsive-table">
    <tr>
		<td>Page title</td>
		<td>Page URL</td>
	</tr>

	<?php while ($row=mysqli_fetch_assoc($allpages)): ?>
	<tr>
		<td><?php echo $row['page_title'] ?></td>
		<td><?php echo $row['page_url'] ?></td>
		<td><a href=edit.php?id=<?php echo $row['page_id'] ?> class="waves-effect waves-light btn">Edit</a></td>
		<td><a href=delete.php?id=<?php echo $row['page_id'] ?> class="waves-effect waves-light btn">Delete</a></td>
		
	</tr>
	<?php endwhile; ?>

</table>
</body>
</html>