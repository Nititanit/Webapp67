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
<form method="post" action="insertmembersuccess.php">
        <p>
            <label>รหัสสมาชิก</label>
            <input type="text" name="member_id" id="member_id">
        </p>
        <p>
            <label>ชื่อ</label>
            <input type="text" name="first_name" id="first_name">
        </p>
        <p>
            <label>นามสกุล</label>
            <input type="text" name="last_name" id="last_name">
        </p>
        <p>
            <label>อีเมล</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label>วันที่</label>
            <input type="date" name="join_date" id="join_date">
        </p>
        <input type="submit" value="บันทึก">
        <br>
        <br>
        <a href='members.php'> <button> Home </button></a>
    </form>
</body>
</html>
