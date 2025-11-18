<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <form action="" method="POST">
        <input type="number" name="num" placeholder="Enter a number"> <br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $num = $_POST['num'];
            
           
            if($num==1){
                echo "$num is a not a prime number";
                exit;
            }
            if($num==2){
                echo "$num is a prime number";
                exit;
            }
            if($num>2){
                for($i=2; $i<$num; $i++){
                    if($num % $i == 0){
                        echo "$num is not a prime number";
                        exit;
                    }
                }

                
                echo "$num is a prime number";
            }
        }
    ?>

</body>
</html>
