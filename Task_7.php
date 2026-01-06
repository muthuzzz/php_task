<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.error
{
    color: red;
}
</style>
</head>
<body>
 <!-- form validation PHP validation should be before the HTML form--> 
<?php
$nameErr=$emailErr=$websiteErr="";
$name=$email=$website="";
function test_input($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(empty($_POST["name"]))  
  {
    $nameErr="Name is Required";
  }
  else
  {
    $name= test_input($_POST["name"]);
        // check if name only contains letters and whitespace
if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
{
    $nameErr="Only letters and white space allowed";
}
  }
}
if(empty($_POST["email"]))
{
    $emailErr="email is required";
}
else{
    $email=test_input($_POST["email"]);
      // check if e-mail address is well-formed
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $emailErr = "Invalid email format";
}
}
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }
?>   
<!--validation form  body -->
    <h2>Form Validation</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name:
        <input type="text" name="name" value="<?php echo $name ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
<!-- display details after form submitted     -->
<?php
echo "<h1>Your details</h1><br>";
echo "Name :$name<br>";
echo "Email :$email<br>";
echo "Website:$website<br>";
?>

</body>
</html>