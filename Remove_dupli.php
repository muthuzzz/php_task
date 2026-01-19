<?php
echo "Remove Duplicate numbers";
$a=array(1,2,3,4,5,1,2,3);
for($i=0;$i<count($a);$i++){
    for($j=0;$j<count($a);$j++)
        {
            if ($a[$i]==$a[$j] && $i!=$j)
                {
                    unset($a[$j]);
                }  }
}
for($i=0;$i<count($a);$i++)
    {
    echo $a[$i];
    }
?>