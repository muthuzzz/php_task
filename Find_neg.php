<?php 
echo "Find Negative numbers in an array";
$a=array(1,-2,3,-4,5,-6,7,-8);
for($i=0;$i<count($a);$i++)
    {
    if($a[$i]<=0)
        {
            echo $a[$i];
        }
    }
?>