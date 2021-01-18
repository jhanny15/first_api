<?php

    // Create connection
    $conn = new mysqli(
        'mydatabase',   //host
        'root',         //username
        'pass',         //password
        'blog_db');     //database


    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

     //Query
    $query = "SELECT comment_ID, comment_name FROM Comment WHERE post_ID = '2'";
    $result = $conn->query($query);

    
    //Fetch Query
    if($result){
      while($row = $result->fetch_array(MYSQLI_NUM)){
        echo json_encode($row);
      }
   }
