<?php 
include "model.php";
$newDb= new Database('localhost','root','','news');
$menuId=$_GET['id'];
$deleteMenu = new DeleteMenu($newDb->connection, $menuId);
?>