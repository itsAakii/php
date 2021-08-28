<!DOCTYPE html>
<html><head>
</head>
<body>

    <h2>Continue Statement</h2>
        <p>Continue Statement skips the condition if it is true</p>

<?php
    for($i=0; $i<100; $i++){
        if($i==50)
        {
            continue;
        }
       
        if($i==81){
            break;
        }
        echo "The number is $i <br>";
    }
    ?>

</body>
</html>