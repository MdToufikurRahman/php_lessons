<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>New Student Entry</h3>
    <form action="" method="post">
       
        First Name : <br>
        <input type="text" name="fname"> <br>
        Last Name : <br>
        <input type="text" name="lname"> <br>
         DOB : <br>
        <input type="date" name="dob"> <br>
         Notes : <br>
        <input type="text" name="notes"> <br>

        <input type="submit" name="submit" value="Submit">
    </form>
    <?php 
    if(isset($_POST['submit'])){
       extract($_POST);
        
        $sql = "INSERT INTO stu VALUES (NULL,'$fname','$lname','$dob','$notes')";
        include_once("db_config.php");
        $db->query($sql);

        if($db->affected_rows){
            echo "Inserted";
        }

    }
    
    
    
    ?>
</body>
</html>