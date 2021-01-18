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

