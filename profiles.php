<?php
	 include 'C:\xampp\htdocs\social\includes\config\db.php';

    $sql = "select * from social.user";
    $res = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/style.css" />
    <title>Welcome To NepLink</title>
  </head>
  <body>
    <nav class="navbar bg-dark">
      <h1>
        <a href="index.html"><i class="fas fa-code"></i> DevConnector</a>
      </h1>
      <ul>
        <li><a href="profiles.php">People</a></li>
         <li><a href="posts.php">Posts</a></li>

        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
    <section class="container">
      <h1 class="large text-primary">Developers</h1>
      <p class="lead">
        <i class="fab fa-connectdevelop"></i> Browse and connect with developers
      </p>
      <div class="profiles">
        <div class="profile bg-light">
          
        </div>
 <?php 
 while($row=mysqli_fetch_assoc($res)){
       
        echo "<div class='profile bg-light'>";
        echo  "<img
            class='round-img'
            src='https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200'
            alt=''
          />";
        echo  "<div>";
        echo    "<h2>".$row['name']."</h2>
            <p>Developer at Microsoft</p>
            <p>Seattle, WA</p>
            <a href='profile.html' class='btn btn-primary'>View Profile</a>
          </div>";

          
       echo "</div>";
   }

 ?>
      </div>
    </section>
  </body>
</html>
