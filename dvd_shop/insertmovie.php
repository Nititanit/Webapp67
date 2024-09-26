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
<form method="post" action="insertmoviesuccess.php">
        <p>
            <label>รหัสภาพยนตร์</label>
            <input type="text" name="movie_id" id="movie_id">
        </p>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label>ปีที่วางจำหน่าย</label>
            <input type="text" name="release_year" id="release_year">
        </p>
        <p>
            <label>ประเภท</label>
            <input type="text" name="genre" id="genre">
        </p>
        <p>
            <label>ราคา</label>
            <input type="text" name="price" id="price">
        </p>
        <p>
            <label>นักแสดง</label>
            <input type="text" name="cast" id="cast">
        </p>
        <input type="submit" value="บันทึก">
        <a href='members.php'> <button> Home </button></a>
    </form>
</body>
</html>