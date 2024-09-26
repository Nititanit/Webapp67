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
    $sql = "SELECT * FROM `movies`";
    $result = $conn-> query($sql);
    if(!$result){
        die("Error : ".$conn ->$conn_error);
    }
?>
<h1>___MOVIE___</h1><br> 
        <table>
            <thead>
                <tr>
                    <th>รหัสภาพยนตร์</th>
                    <th>ชื่อ</th>
                    <th>ปีที่วางจำหน่าย</th>
                    <th>ประเภท</th>
                    <th>ราคา</th>
                    <th>หมายเหตุ</th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["movie_id"]."</td>"."<td>".$row["title"]."</td>"."<td>".$row["release_year"]."</td>"."<td>".$row["genre"]."</td>"."<td>".$row["price"]."</td>"."<td>".
                            "<a href='editmovie.php?movie_id=".$row["movie_id"]."'><button> Edit </button></a>"."</td>";
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
        <a href='members.php'><button> <-----</button></a>
        <a href='insertmovie.php'><button> Insert Movie</button></a>


</body>
</html>