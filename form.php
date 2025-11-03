<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      // echo "<pre>";
     //   print_r($_POST);
      //  echo "</pre>";

    $fullname = $_GET['fullname'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];


    ?>


    <form action="" method="post">
        name: <br>
        <input type="text" name="name" placeholder="Enter name"><br>
        E-mail: <br>
        <input type="text" name="email" placeholder="Enter mail"> <br>
        phone: <br>
        <input type="text" name="phone" placeholder="Enter number"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>