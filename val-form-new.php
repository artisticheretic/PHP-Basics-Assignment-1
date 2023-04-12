<?php

    require('NameValidation.php');

?>

<html lang="en">
<head>
    <title>Basics Assignment 1 - Reload</title>
    <link rel="stylesheet" href="val-form.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3>Hello <?php echo htmlspecialchars($_POST['fname']) ?> <?php echo htmlspecialchars($_POST['lname']) ?> </h3>
    </div>    
</body>
</html>