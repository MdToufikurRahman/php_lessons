<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr , td{
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Name: <br>
        <input type="text" name="fullname"> <br>
        Email: <br>
        <input type="text" name="email"> <br>
        skills: <br>
        <select name="skills[]" multiple="multiple" id="">
            <option value="csharp">c#</option>
            <option value="javascript">javascript</option>
            <option value="php">php</option>
        </select> <br>
        Skills you want to learn: <br>      

        <input type="checkbox" name="learns[]" value=".net">asp.net
        <input type="checkbox" name="learns[]" value="c">c
        <input type="checkbox" name="learns[]" value="c++">c++
        <input type="checkbox" name="learns[]" value="python">python <br>

        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php 
        if(isset($_REQUEST["submit"])){
           $name = $_REQUEST["fullname"];
           $email = $_REQUEST["email"];
           $skills = $_REQUEST["skills"];
           $learns = $_REQUEST["learns"];

           $skills_output = "";
           $learns_output = "";

           foreach($skills as $skill){
                $skills_output .= $skill . ", ";
           }
           foreach($learns as $learn){
                $learns_output .= $learn . ", ";
           }

           ?>
           <table>
            <tr>
                <td>Name:</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Skills:</td>
                <td><?php echo $skills_output; ?></td>
            </tr>
            <tr>
                <td>Languages:</td>
                <td><?php echo $learns_output; ?></td>
            </tr>
        </table>

           <?php
        }
    ?>


</body>
</html>
