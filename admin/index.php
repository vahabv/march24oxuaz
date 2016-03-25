
  <!DOCTYPE html>
  <html>
    <head>
     
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="../style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript" src="js/jquery-1..js"></script>



    <div class="row jquery" style="border:1px solid black;">
      <div class="col s3" style="border-right:1px solid black ;height:100%;">
        <div class="row " >
          <h4>Menu</h4>
          <a href="#" style="margin-left:15px;font-size:22px;color:brown;">add menu</a><br>
          <a href="#" style="margin-left:15px;font-size:22px;color:brown;">all news</a>
        </div>
        
        <div class="row">
          <h4>News</h4>
          <a href="#" style="margin-left:15px;font-size:22px;color:brown;">add news</a><br>
          <a href="#" style="margin-left:15px;font-size:22px;color:brown;">all news</a>
        </div>

        <div class="row">
          <h4>Pages</h4>
          <a href="#" style="margin-left:15px;font-size:22px;color:brown;">add pages</a><br>
          <a href="#" style="margin-left:15px;font-size:22px;color:brown;">all pages</a>
        </div>

      </div>
      <div class="col s9" ></div>
    </div>


    </body>
  </html>
  <script >

      $(document).ready(function(){
        var a=$(window).height();

       $(".jquery").css("height",a);



      });
      </script>