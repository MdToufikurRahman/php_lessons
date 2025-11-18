<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="post">
        Number 1: <br>
        <input type="number" name="num1" required><br>
        Number 2: <br>
         <input type="number" name="num2" required><br>
        Number 3: <br>
         <input type="number" name="num3" required><br>
        Number 4: <br>
        <input type="number" name="num4" required><br>
        Number 5: <br>
        <input type="number" name="num5" required><br>

        <input type="submit" name="submit" value="Find Largest">
        <input type="submit" name="submit" value="Find Smallest">
    </form>

     <?php
    if (isset($_POST['submit'])) {
        $numbers = array(
            $_POST['num1'],
           $_POST['num2'],
           $_POST['num3'],
           $_POST['num4'],
            $_POST['num5']
        );

       
        $largest = $numbers[0];
        $smallest = $numbers[0];
        for ($i = 1; $i < count($numbers); $i++) {
            if ($numbers[$i] > $largest) {
                $largest = $numbers[$i];
            }
        }

        echo "the largest is " . $largest . "<br>"; 

        $smallest = $numbers[0];
        for ($i = 1; $i < count($numbers); $i++) {
            if ($numbers[$i] < $smallest) {
                $smallest = $numbers[$i];
            }
        }

        echo "the smallest is " . $smallest ;
    }
    ?>
</body>
</html>