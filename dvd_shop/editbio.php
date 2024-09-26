<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    <?php
        if(!isset($_GET['member_id'])){
            header("refresh: 0; url=members.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM member WHERE member_id='$_GET[member_id]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form method="post" action="editsuccess.php">
        <p>
            <label>ชื่อ</label>
            <input type="text" name="member_id" id="member_id" value="<?=$row['member_id'];?>" hidden>
            <input type="text" name="first_name" id="first_name" value="<?=$row['first_name'];?>" />
        </p>
        <p>
            <label>นามสกุล</label>
            <input type="text" name="last_name" id="last_name" value="<?=$row['last_name'];?>" />
        </p>
        <p>
            <label>อีเมล</label>
            <input type="text" name="email" id="email" value="<?=$row['email'];?>" />
        </p>
        <p>
            <label>วันที่</label>
            <input type="date" name="join_date" id="join_date" value="<?=$row['join_date'];?>" />
        </p>
        <input type="submit" value="บันทึก">
        <a href='members.php'><button> Home</button></a>
    </form>
</body>
</html>
