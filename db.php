<?php

    $server="localhost";
    $username="root";
    $userpass="";
    $dbname="news_vahab";

$conn=mysqli_connect($server,$username,$userpass,$dbname);

if (!$conn) {
	echo "lalalla";
}

?>