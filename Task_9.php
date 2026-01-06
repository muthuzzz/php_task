<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </h2>ADD two numbers</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter first number: <input type="text" name="num1"><br><br>
        Enter second number: <input type="text" name="num2"><br><br>
        <input type="submit" name="submit" value="Add">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        if(is_numeric($num1) && is_numeric($num2))
        {
            $sum=$num1 + $num2;
            echo "<h3>Sum of $num1 and $num2 is: $sum</h3>";
        }
        else
        {
            echo "<h3>Please enter valid numbers.</h3>";
        }
    }
    ?>
</body>
</html>