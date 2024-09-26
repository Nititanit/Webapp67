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
    require'conn.php';
    $sql = "SELECT * FROM `member`";
    $result = $conn-> query($sql);
    if(!$result){
        die("Error : ".$conn ->$conn_error);
    }
?>
<h1>___MEMBER___</h1>
<br> 
        <table>
            <thead>
                <tr>
                    <th>รหัสสมาชิก</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>อีเมล</th>
                    <th>วันที่</th>
                    <th>หมายเหตุ</th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["member_id"]."</td>"."<td>".$row["first_name"]."</td>"."<td>".$row["last_name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["join_date"]."</td>"."<td>".
                            "<a href='editbio.php?member_id=".$row["member_id"]."'><button> Edit </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table> 
        <br>
        <a href='insertmember.php'><button> Insert Member</button></a>
        <a href='movie.php'><button>Movie</button></a>


</body>
</html>