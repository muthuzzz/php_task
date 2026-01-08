<?php
$a=array(0,1,0,0,3,4,0,5,6,0,0,0);
$n=count($a);
$count=0;
echo "Original Array: ";
for($i=0;$i<$n;$i++){
    echo $a[$i]." ";
}
echo "<br>Array after moving zeros to the end: ";
for($i=0;$i<$n;$i++){
    if($a[$i]!=0){
        $temp = $a[$i];
        $a[$i] = $a[$count];
        $a[$count] = $temp;
        $count++;
    }
}
for($i=0;$i<$n;$i++){
    echo $a[$i]." ";
}
?>