<?php
include "db.php";


	$pagesId=$_GET['id'];



	$delete= "DELETE FROM pages WHERE page_id=$pagesId";

	$sql=mysqli_query($conn,$delete);
	 
	if($sql){
		header('Location:allpages.php');
	}else{
		echo "error";
	}


?>