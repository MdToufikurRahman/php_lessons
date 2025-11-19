<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Student Edit</h3>
    <?php 
    
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM stu WHERE employeeID = '$id'";
    $rawData = $db->query($sql);

    $row = $rawData->fetch_object();

    if(isset($_POST['submit'])){
        extract($_POST);
       $sql = "UPDATE stu SET first_name='$fname', last_name='$lname', birthdate='$dob', notes='$notes' WHERE employeeID='$id'";

       $db->query($sql);
       header("Location:index.php");

    }
    ?>
     <form action="" method="post">
       
        First Name : <br>
        <input type="text" name="fname" value="<?php echo $row->first_name; ?>"> <br>
        
        Last Name : <br>
        <input type="text" name="lname" value="<?php echo $row->last_name; ?>"> <br>
        
        DOB : <br>
        <input type="date" name="dob" value="<?php echo $row->birthdate; ?>"> <br>
        
        Notes : <br>
        <input type="text" name="notes" value="<?php echo $row->notes; ?>"> <br> <br>
        <input type="hidden" name="id" value="<?php echo $id ?>">

        <input type="submit" name="submit" value="UPDATE">

    </form>
</body>
</html>
