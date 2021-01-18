<?
    require_once 'db_connection.php';

    
    //Query per trovare i commenti di una post
    $post_ID = $_GET["post_ID"];
    $query = "SELECT comment_ID, comment_text FROM Comment WHERE post_ID =".$post_ID;
    $result = $conn->query($query);

    //Fetch Query
    if($result){
      while($row = $result->fetch_array(MYSQLI_NUM)){
        echo json_encode($row);
      }
   }    