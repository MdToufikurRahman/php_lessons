<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        Name: <br>
        <input type="text" name="username" placeholder="Enter name"> <br>

        Email: <br>
        <input type="text" name="email" placeholder="Enter Email"><br><br>

        <input type="submit" name="submit" value="SUBMIT">

    </form>

<?php
$errors = [];
if (isset($_POST['submit'])) {  

    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);

    
    if (empty($username)) {
        $errors[] = "Username is required.";
    } elseif (strlen($username) < 4 || strlen($username) > 8) {
        $errors[] = "Username must be 4 to 8 characters.";
    }

   
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

  
    if (empty($errors)) {
        echo "Login successful";
    } else {
        
        foreach ($errors as $error) {
            echo $error;
        }
    }
}
?>


</body>
</html>

