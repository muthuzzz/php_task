<?php
//print 1 to 10 using loops
echo"print 1 to 10 using loops<br>";

for($i=1;$i<=10;$i++)
{
echo $i;
echo "<br>";
}
//print only even numbers
echo"print only even numbers<br>";
for($i=1;$i<=10;$i++)
{
    if($i%2==0)
    {
        echo $i;
        echo "<br>";
    }
else
{
    continue;
}
}
?>