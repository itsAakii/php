<!DOCTYPE html>
<html><head>
</head>
<body>

    <h2>Continue Statement</h2>
        <p>Continue Statement skips the condition if it is true</p>

<?php
    for($i=0; $i<10; $i++){
        if($i==4)
        {
            continue;
        }
        echo "The number is $i <br>";

    }
    ?>
<p>as you can see when x==4 condition becomes true and skips printing of 4.</p>
</body>
</html>