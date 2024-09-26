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
        if(!isset($_GET['movie_id'])){
            header("refresh: 0; url=movie.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM movies WHERE movie_id='$_GET[movie_id]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form method="post" action="editsuccess copy.php">
    <p>
            <label>รหัสภาพยนตร์</label>
            <input type="text" name="movie_id" id="movie_id"value="<?=$row['movie_id'];?>" >
        </p>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="title" id="title"value="<?=$row['title'];?>">
        </p>
        <p>
            <label>ปีที่วางจำหน่าย</label>
            <input type="text" name="release_year" id="release_year"value="<?=$row['release_year'];?>" >
        </p>
        <p>
            <label>ประเภท</label>
            <input type="text" name="genre" id="genre"value="<?=$row['genre'];?>" >
        </p>
        <p>
            <label>ราคา</label>
            <input type="text" name="price" id="price"value="<?=$row['price'];?>" >
        </p>
       
        <input type="submit" value="บันทึก">
        <a href='movie.php'><button> Home</button></a>
    </form>
</body>
</html>