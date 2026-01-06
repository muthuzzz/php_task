<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EB Bill Calculation</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter EB bill amount: <input type="text" name="amount"><br><br>
        <input type="submit" name="submit" value="Calculate Discount">
    </form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $amount=$_POST["amount"];
    $bill=0;
    if(is_numeric($amount) && $amount>=0)
    {
       if($amount>2000)
       {
              $bill=$amount - ($amount * 0.20);
              echo "<h3>Discounted EB bill amount is: $bill</h3>";
         }
         else if($amount>=1000 && $amount<=2000)
         {
              $bill=$amount - ($amount * 0.10);
              echo "<h3>Discounted EB bill amount is: $bill</h3>";
         }
         else
         {
              {
                echo "<h3>No discount. EB bill amount is: $amount</h3>"; 
       }
       }
}
}
?>
</body>
</html>