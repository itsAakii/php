<?php

$n=10;
$r=3;
$res=1;
    for($i=1; $i<=$n; $i++ )
                 {
                     $res= $res*$i;
                   
                 } 
                 echo"Factorial of n ","$res<br>"; 
 
                 $n2=$n-$r;
                 $res1=1;
        for($i=1; $i<=$n2; $i++ )
            {

                 $res1= $res1*$i;                   
            } 
            echo "Factorial of n-r ","$res1<br>";

            $result= $res/$res1;
            echo"Permutaion is ","$result";
?>
                