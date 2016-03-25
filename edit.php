<?php
include "db.php";

$pagesId=$_GET['id'];

$select= "SELECT * FROM pages WHERE page_id=$pagesId";
$result=mysqli_query($conn,$select); 
$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="POST">
     
        <input type="text" name="page_title" placeholder="Title" value="<?php echo $row['page_title']?>">	
        <input type="text" name="page_url" placeholder="URL" value="<?php echo $row['page_url']?>">
        <textarea rows="10" cols="100" name="page_text" placeholder="Text"><?php echo $row['page_text']?></textarea>	
        <input type="submit" name="submit" placeholder="SEND">	

     </form>

</body>
</html>

<?php 

if(isset($_POST['submit'])) {

	$page_title=$_POST['page_title'];
	$page_url=$_POST['page_url'];
	$page_text=$_POST['page_text'];

	

	$edit="UPDATE pages SET page_title='$page_title', page_url='$page_url', page_text='$page_text' WHERE page_id=$pagesId";


	$conEdit=mysqli_query($conn,$edit);


	if($conEdit) {
		header ('Location:allpages.php');
		
	}else {
		echo "Error";
	}

}


?>