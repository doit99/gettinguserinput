<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting User Input</title>
</head>
<body>
    <form action="userinput.php" method="post">
        Name: <input type="text" name="yourName" placeholder="Enter Your Name"> <br>
        Age: <input type="number" name="age" placeholder="Enter Your Age"> <br>

        <input type="submit" name="submit" value="Enter">
    
    </form>
</body>
</html>

<!-- PHP section -->

<?php

    if (isset($_POST["submit"])) {  // if submit button is click
        
        // declare and initialize variable
        $name = $_POST["yourName"];
        $age = $_POST["age"];

        // display the result
        echo "Welcome " . $name;
        echo "<br/>";
        echo "You are " . $age . " years old";
    }

?>


