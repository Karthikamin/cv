<?php

    $name = $_POST['name'];
    $email= $_POST['email'];
    
      
      $servername ="sql301.epizy.com";
      $username = "epiz_31000437";
      $password = "xM74PNXCHInegf";
      $database ="epiz_31000437_amindb";
      //create a coonection
      $conn = mysqli_connect($servername, $username, $password);

      if (!$conn){
          die("sorry we failed to connect: ". mysqli_connect_error());
      }
      else{
        echo "connected to database";

      }

          

     



?>