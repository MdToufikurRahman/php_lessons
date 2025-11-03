<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Upload using PHP Procedural Coding</h3>
    <?php 
    if(isset($_POST['UPLOAD'])){
        // echo "<pre>";
        // print_r($_FILES);
        // echo $_FILES['myfile']['name'];
        $filename = $_FILES['myfile']['name'];
        $destination = "files/" . $filename;
        // echo "<br>";
        // echo $_FILES['myfile']['size'];
        // echo "<br>";
        $tmpFile = $_FILES['myfile']['tmp_name'];
        $fileSize = $_FILES['myfile']['size']; //byte
        $maxSize = 500;  //1mb=1048576



        echo $ext =strtolower(pathinfo($filename, PATHINFO_EXTENSION)); 
        echo "<br>";

        $allowedTypes = ["jpg", "jpeg", "png"];
        $errors = [];


        if($fileSize>$maxSize){
            $errors[] = "File is too large";
        } 
        if(!in_array($ext, $allowedTypes)){
            $errors[] = "jpg, png and jpeg is allowed";
        }
        if(count($errors)>0){
            foreach($errors as $error){
                echo $error . "<br>";
            }
        }
        else{
              move_uploaded_file($tmpFile, $destination);
             echo "Uploaded Successfully";

        }
           
       

       
    }
      
    
    
    ?>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" value="UPLOAD" name="UPLOAD">
    </form>

    
</body>
</html>