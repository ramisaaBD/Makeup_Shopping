
<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","makeup");
if(count($_POST)>0) {
$type=$_POST[type];
$result = mysqli_query($conn,"SELECT name,price,description,images_path FROM TOOLS WHERE type='$type'");
}
?>
<!DOCTYPE html>

<html>

  <head>
    <title> Explore | Makeup Vanity </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/foodlist.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
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
           <li><a href="aboutus.php">About</a></li>
            
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myvanity.php">ADMIN CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
           
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Makeup Item <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="face.php">Face</a></li>
              <li> <a href="eyes.php"> Eyes</a></li>
              <li> <a href="lips.php">Lips</a></li>
<li> <a href="brush.php">Brushes & Tools</a></li>
<li> <a href="nails.php">Nails</a></li>
<li> <a href="hair.php">Hair</a></li>
            </ul>
            </li>

            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart  (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>) </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>


<?php
}
?>



        </div>

      </div>
    </nav>

    

<div class="jumbotron">
  <div class="container text-center">
    <h1>Welcome To Makeup Vanity</h1>   

        <br>   
    
  </div>
</div>
<table>
<tr>
<td>Product Name</td>
<td>Price</td>
<td>Description</td>
<td>Image</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["price"]; ?></td>
<td><?php echo $row["description"]; ?></td>
<td><img src="<?php echo $row["images_path"]; ?>" class="img-responsive"style="width: 300px;"></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>