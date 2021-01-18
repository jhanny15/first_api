<link href="index.css" type="text/css" rel="stylesheet" />
<?
    require_once 'db_connection.php';

    
    $post_ID = $_REQUEST['post_ID'];
    if (isset($_REQUEST) && is_array($_REQUEST)) {

      //Sanitize
      if (filter_var( $_REQUEST['post_ID'], FILTER_SANITIZE_NUMBER_INT)){

        $post_ID = filter_var( $_REQUEST['post_ID'], FILTER_SANITIZE_NUMBER_INT);
        
        
        //Query per trovare post_ID
        $query = ("SELECT user_ID FROM Post WHERE post_ID =".$post_ID);
        $result = $conn->query($query);

        //Fetch Query per user_ID
        if($result){
          while($row = $result->fetch_row()){
            //Usato per prendere user_ID
            foreach($row as $box){
                $user_ID = $box;
            }
          }
       }

        //Query per stampare l'info dell'autore tramite post_ID
        $query = ("SELECT * FROM Author WHERE user_ID =".$user_ID);
        $result = $conn->query($query);
     
        //Fetch Query per Author of the Post
        if($result){
            while($row = $result->fetch_array(MYSQLI_NUM)){
              echo json_encode($row)."<br />";
            }
         }    

      } else echo "Risultato non sanitizzato";


    } else echo "mi spiace, non abbiamo altre informazioni sull'autore";  
?>
