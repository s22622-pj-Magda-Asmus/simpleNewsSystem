
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Magdalena Asmus</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
require "../db.php";
?>
<header>
    <h1>Szczegóły wybranego postu </h1>
</header>

<section>

    <article>
        <?php

        $id=$_GET['id'];
        $posts = $mysqli->query("select * from posts where id=$id ;");
        if($posts){
            while($row = $posts->fetch_object()){

                echo "<header><h3> " . $row->title . " </h3></header> ";
                echo "<p>" . $row->body. "</p>";
                echo "<p id='addDate'>  Data dodania:  " . $row->post_time . "</p> ";

            }
        }
        ?>
    </article>


</section>


<footer>Copyright Asmus 2022 </footer>
</body>
</html>