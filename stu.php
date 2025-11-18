<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr , th , td{
            border: 3px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
 <?php 
    $sql = "SELECT * FROM stu ORDER BY employeeID desc";
    $result = $db->query($sql);
  
 
 
 ?> 

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last name</th>
            <th>DOB</th>
            <th>Notes</th>
        </tr>
        <?php 
         while($row1 = $result->fetch_object()):
        ?>
        <tr>
            <td><?php echo $row1->employeeID ?></td>
            <td><?php  echo $row1->first_name ?></td>
            <td><?php echo $row1->last_name ?></td>
            <td><?php echo $row1->birthdate ?></td>
            <td><?php echo $row1->notes ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
 
</body>
</html>