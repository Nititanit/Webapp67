<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'conn.php';
        $sql_update="INSERT INTO movies(movie_id,title,release_year,genre,price) VALUES ('$_POST[movie_id]','$_POST[title]','$_POST[release_year]' ,'$_POST[genre]' ,'$_POST[price]')";
        $result= $conn->query($sql_update);
        if(!$result) {
            ie("Error God Damn it : ". $conn->error);
        } else {
            echo "Insert Success <br>";
            header("refresh: 1; url=movie.php");
        }

    ?> 
</body>
</html>