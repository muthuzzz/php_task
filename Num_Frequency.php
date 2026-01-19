<?php
echo "Find Number Frequency<br>";
$a=[1,2,2,3,2,3,1,5,4,5];
$b=[];
sort($a);
echo "{";
for($i=0;$i<count($a);$i++)
    {
$count=0;
   for($j=0;$j<count($a);$j++)
{
if($a[$i]==$a[$j])
    {
    $count++;
    }
    else{
        continue;
    }
    }   
if($a[$i]==$a[$i+1])
    {
        continue;
    }
// array_push($b,[$a[$i]=>$count]);
  echo $a[$i].":".$count.","; 
    }
echo "}";
// print_r($b);
?>