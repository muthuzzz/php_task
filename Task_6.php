<?php
echo"Associative array<br>-------------------------<br>";
$stdname=array("name"=>"muthu","age"=>20,"year"=>2025);
var_dump($stdname);
echo "<br>";
echo $stdname["name"]."<br>";
foreach($stdname as $x=>$y)
{
    echo "$x=>$y<br>";
}

?>