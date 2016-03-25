<?php
include "model.php";

$newDb= new Database('localhost','root','','news');




if(isset($_POST['submit'])){

$menuTitle=$_POST['menu_title'];
$menuUrl=$_POST['menu_url'];

$query="INSERT INTO menu (menu_title,menu_url)   VALUES ('$menuTitle','$menuUrl')";
  mysqli_query($newDb->connection, $query);

}



 ?>

 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>


      <div class="row">
        <form class="col s12" action="" method="POST">
          <div class="row">

            <div class="input-field col s9">
          <input placeholder="menu title" name="menu_title" type="text" class="validate">
          <label>Title</label>
      </div>

        <div class="input-field col s9">
          <input placeholder="menu URL" name="menu_url" type="text" class="validate">
          <label>URL</label>
        </div>

        <input type="submit" name="submit">


    </form>
  </div>




      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
