<link href="index.css" type="text/css" rel="stylesheet" />
<?
    
    require_once 'db_connection.php';


    $post_ID = $_REQUEST['post_ID'];
    if (isset($_REQUEST) && is_array($_REQUEST)) {

      //Sanitize
      if (filter_var( $_REQUEST['post_ID'], FILTER_SANITIZE_NUMBER_INT)){

        $post_ID = filter_var( $_REQUEST['post_ID'], FILTER_SANITIZE_NUMBER_INT);


        //Query per trovare i commenti di una post
        $query = "SELECT comment_ID, comment_text FROM Comment WHERE post_ID =".$post_ID;
        $result = $conn->query($query);


        //Fetch Query
        echo "Ecco i commenti del post: $post_ID". "<br />";
        if($result){
          while($row = $result->fetch_array(MYSQLI_NUM)){
            echo json_encode($row). "<br />";
          }
       } 
    

      } else echo "Risultato non sanitizzato";


    } else echo "mi spiace, non abbiamo altre informazioni sull'autore";
?>
