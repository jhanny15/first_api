<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link href="index.css" type="text/css" rel="stylesheet" />
    </head>
    <body>

        <h2>Benvenuto, che operazione vuoi fare?</h2>


        <p>Trovare i commenti di un post</p>
        <form action="query1.php" method="request">
            <input type="text" name="post_ID" placeholder="post_ID">
            <button type="submit">Cerca</button> <br />
        </form>


        <p>Trovare un post con post_ID</p>
        <form action="query2.php" method="request">
            <input type="text" name="post_ID" placeholder="post_ID">
            <button type="submit">Cerca</button> <br />
        </form>


        <p>Visualizzare l'info dell'autore tramite post_ID</p>
        <form action="query3.php" method="request">
            <input type="text" name="post_ID" placeholder="post_ID">
            <button type="submit">VAI!</button> <br />
        </form>


        <p>Visualizzare tutti i post in ordine cronologico "decrescente"</p>
        <form action="query4.php" method="request">
            <button type="submit">VAI!</button> <br />
        </form>
    </body>
</html>