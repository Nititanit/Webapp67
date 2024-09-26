<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'conn.php';
        $sql_update="INSERT INTO member(member_id,first_name,last_name,email,join_date) 
                     VALUES('$_POST[member_id]',
                            '$_POST[first_name]',
                            '$_POST[last_name]',
                            '$_POST[email]',
                            '$_POST[join_date]')";

        $result= $conn->query($sql_update);

        if(!$result) {
            die("Error God Damn it : ". $conn->error);
        } else {

        echo "Insert Success <br>";
        header("refresh: 1; url=members.php");
        }
    ?> 
</body>
</html>