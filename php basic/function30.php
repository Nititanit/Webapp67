<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>writeMessage function</title>
</head>
<body>
    <?php
        function addFive($num)
        { //start function
            $num += 5;

        }

        function addSix($num)
        {
            $num +=6;
        }
        $orignum = 10;
        addFive($orignum);
        echo "the value of original variables iss ==> $orignum <br>";
        addSix($orignum);
        echo "the value of original variables iss ==> $orignum <br>";
    ?>
    
</body>
</html>