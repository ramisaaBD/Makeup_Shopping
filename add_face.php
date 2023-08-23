<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Admin Login | Makeup Vanity </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/add_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Makeup Vanity</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">ADMIN CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>




<div class="container">
    <div class="jumbotron">
     <h1>Hello Admin! </h1>
     <p>Manage your Makeup Vanity from here</p>

    </div>
    </div>
<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		<a href="myvanity.php" class="list-group-item ">My Vanity</a>
    		<a href="add_makeup_items.php" class="list-group-item active">Add Makeup Items</a>
<a href="add_face.php" class="list-group-item ">Add Face Items</a>
    		    		
</div>
    </div>
    


    
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="add_makeup_items1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> ADD NEW FACE ITEM HERE </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Product Name" required="">
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="price" name="price" placeholder="Your Product Price (BDT)" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="description" name="description" placeholder="Your Product Description" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="images_path" name="images_path" placeholder="Your Product Image Path[images/<filename>.<extention>]" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="type" name="type" placeholder="Your Product Type" required="">
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD MAKEUP ITEM </button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>

  </body>
</html>