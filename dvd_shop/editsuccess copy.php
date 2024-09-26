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
        $sql_update="UPDATE movies SET movie_id='$_POST[movie_id]',title='$_POST[title]' ,release_year='$_POST[release_year]' ,price='$_POST[price]' WHERE movie_id='$_POST[movie_id]' ";
        $result= $conn->query($sql_update);
        if(!$result) {
                die("Error God Damn it : ". $conn->error);
        } else {
        echo "Edit Success <br>";
        header("refresh: 1; url=movie.php");
        }
    ?>
</body>
</html>