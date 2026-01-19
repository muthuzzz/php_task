<?php
echo "original Array<br>";
$a=[1,2,3,4,5,6,7,8];
for($i=0;$i<count($a);$i++)
{
    echo $a[$i]."<br>";
}
for($i=0;$i<count($a);$i++)
    {
        if($a[$i]%2!=0)
            {
                $a[$i]=0;
            }
    }
echo "Replace Odd number into Zero<br>";
for($i=0;$i<count($a);$i++)
{
    echo $a[$i]."<br>";
}
?>