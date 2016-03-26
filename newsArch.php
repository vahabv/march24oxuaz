<?php 

$connection = mysqli_connect('localhost', 'root', '', 'news');

// //bu hissede Data base-e qoshuldum.
// if($connection) {
// echo "everythink is OK.<hr>";
// }else {
//   die("Problem on connection"); }

$query = "SELECT * FROM xeber";
$result = mysqli_query($connection, $query);

// if (!$result) {
//   die('<h1>Query ishlemedi, nese sehv var</h1>'.mysqli_error());
// } else {
//   echo "'<hr>'we are ok";
// }



?> 



<!DOCTYPE html>
<html>
<head>
	<title></title>
	 	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>

<div class="main-div"> 

      <table  class="highlight table">
      <h3>Xeberlerin siyahisi</h3>
     
        <thead>
          <tr>
              <th data-field="news_number">N</th>
              <th data-field="news_id">Id</th>
              <th data-field="news_title">News Title</th>
              <th data-field="news_desc">News Description</th>
              <th data-field="news_thumb">News thumb</th> 
              <th data-field="news_date">Date</th>
              <th data-field="news_url">Url</th>
              <th data-field="news_status">Status</th>

          </tr>
</thead>
<tbody>

 

<?php 
$i = 0;
while($row = mysqli_fetch_assoc($result)) {
  $i++;
echo "<tr>";

echo "<td>";
echo "$i";
echo "</td>";

echo "<td>";
echo $row["news_id"];
echo "</td>";

echo "<td>";
echo $row["news_title"];
echo "</td>";

echo "<td>";
echo $row["news_desc"];
echo "</td>";

echo "<td>";
echo "<a href='#'>".$row["news_thumb"]."</a href>"; 
echo "</td>";

echo "<td>";
echo $row["news_date"]; 
echo "</td>";

echo "<td>";
echo "<a href>".$row["news_url"]."</a href>";
echo "</td>";

echo "<td>";
echo $row["news_status"];
echo "</td>";


echo "</tr>";

}
?>


</tbody>
</table>






</div>
</body>
</html>