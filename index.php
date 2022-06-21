

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Magdalena Asmus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require "db.php";
?>
<header>
    <h1>Newsy ze swiata i nie tylko </h1>
</header>

<section>

    <article>
        <?php
        $posts = $mysqli->query("select * from posts order by post_time desc;");
        $i=0;
        if($posts){
            while($row = $posts->fetch_object()){

                while($i<3) {
                    $i=$i+1;
                    $id = $row->id;
                    echo "<div id='news'>";
                    echo "<header><h3> " . $row->title . " </h3></header> ";

                    $show = substr($row->body, 0, 100);

                    if (strlen($row->body) > 100)
                        $kropki = "...";
                    else
                        $kropki = "";

                    echo "<p>" . $show . $kropki . "</p>";
                    echo "<p id='addDate'>  Data dodania:  " . $row->post_time . "</p> ";
                    echo "<a href='" . "http://localhost:443/projekt/podstrony?id=$id" . " '> Czytaj wiecej... </a> ";
                    echo "</div>";

                }
            }
        }
        ?>
    </article>


</section>


<footer>Copyright Asmus 2022 </footer>
</body>
</html>