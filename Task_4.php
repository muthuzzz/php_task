<?php
//create functions
function CalculateTotal($price,$quantity)
{
$total=$price*$quantity;
return $total;
}
echo "Total Price =".CalculateTotal(200,10);
?>