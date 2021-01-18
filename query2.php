<link href="index.css" type="text/css" rel="stylesheet" />
<?
    require_once 'db_connection.php';

    
    $post_ID = $_REQUEST['post_ID'];
    if (isset($_REQUEST) && is_array($_REQUEST)) {

      //Sanitize
      if (filter_var( $_REQUEST['post_ID'], FILTER_SANITIZE_NUMBER_INT)){

        $post_ID = filter_var( $_REQUEST['post_ID'], FILTER_SANITIZE_NUMBER_INT);
        
        
        //Query per trovare un post con post_ID
        $query = "SELECT * FROM Post WHERE post_ID =".$post_ID;
        $result = $conn->query($query);

        //Fetch Query
        echo "Ecco il commento:". "<br />";
        if($result){
          while($row = $result->fetch_array(MYSQLI_NUM)){
            echo json_encode($row);
          }
       } 
       
       
      } else echo "Risultato non sanitizzato";


    } else echo "mi spiace, non abbiamo altre informazioni sull'autore";  
?>
