<link href="index.css" type="text/css" rel="stylesheet" />
<?
    require_once 'db_connection.php';

    //Query per stampare tutti post in ordine cronologico descendente
    $query = "SELECT * FROM Post ORDER BY post_date DESC";
    $result = $conn->query($query);

    //Fetch Query
    if($result){
      while($row = $result->fetch_array(MYSQLI_NUM)){
        echo json_encode($row). "<br />";
      }
    }  
   

?>
