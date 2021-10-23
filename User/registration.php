<?php
  include "connection.php";
  session_start();
?>

<!DOCTYPE html>
<html>
<head>

  <title>User Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body>
<header style ="height: 0px;">
  <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
            </div>
                <ul class="nav navbar-nav">
                   <li><a href="index.php">HOME</a></li>
                   <li><a href="books.php">BOOKS</a></li>
                   <li><a href="feedback.php">FEEDBACK</a></li>
               </ul>
              <ul class="nav navbar-nav navbar-right">
              <li><a href="registration.php"><span class="glyphicon glyphicon-user"> Signup </span></a></li>
                  <li><a href="user login.php"><span class="glyphicon glyphicon-log-in"> Login </span></a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> Logout </span></a></li>
                 
    
</header>

<section>
    <div class="reg_img">  
    <br><br><br><br><br><br>     
        <div class="buck2" >
        <h1 style="text-align: center; font-size: 30px;font-family: 'Times New Roman', Times, serif;">E-LIFE LEARNER</h1><br>
        <h1 style="text-align: center; font-size: 25px;font-family: 'Times New Roman', Times, serif;">User Registration </h1><br>
      <form name="Registration" action="" method="POST"
          <div class="reg">
          <input type="text" name="First" placeholder="First Name" required=""> <br><br>
          <input type="text" name="Last" placeholder="Last Name" required=""> <br><br>
          <input type="text" name="Username" placeholder="Username" required=""> <br><br>
          <input type="text" name="Email"  placeholder="Email" required> <br><br>
          <input type="text" name="Password"  placeholder="Password" required> <br><br>
          <input type="password" name="Password"  placeholder=" Confirm Password" required> <br><br>
          <input type="text" name="Contact"  placeholder="Phone No" required> <br><br>

          
          <input class="btn btn-defult" type="submit" name="submit" value="Sign Up" style="color: #bdc52d; width: 90px; height: 40px"> 
      

      </form>
     
    </div>


</section>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;

        $sql="SELECT Username from `user`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['Username']==$_POST['Username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `user` VALUES('$_POST[First]', '$_POST[Last]', '$_POST[Username]', '$_POST[Email]', '$_POST[Password]', '$_POST[Confirm]','$_POST[Contact]', 'de.jpg);");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>

<br><br><br><br>
<br><br><br><br><br><br>

<p style="color: #bf0fff; font-family: Times New Roman;">
    <br>
    &nbsp; Copyright @Team Invinsible 2021-2024
</p>

</body>
</html>