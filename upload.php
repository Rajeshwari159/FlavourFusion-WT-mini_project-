<?php include("conn.php"); 
    // error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload recipe</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="title">Title</label>
        <input type="text" class="title" id="title" name="title">
        <label for="ingred">Ingredients</label>
        <input type="text" class="ingred" id="ingred" name="ingred">
        <label for="desc">description</label>
        <input type="text" class="desc" id="desc" name="proce">
        <input type="submit" name="submit">
    </form>
</body>
</html>


<?php
    if(isset($_POST['submit']))
    {

        // $filename = $_FILES['uploadfile']["name"];
        // $tempname = $_FILES['uploadfile']["tmp_name"];
        // $folder = "images/".$filename;
        // move_uploaded_file($tempname, $folder);


        $title = $_POST['title'];
        $ingred = $_POST['ingred'];
        $proce = $_POST['proce'];
        

        if($title != "" && $proce!="" && $ingred!="") {
            $insert_query = "INSERT INTO recipe (title,proce,ingred) values('$title','$proce','$ingred')";
            $data = mysqli_query($conn, $insert_query);

            if($data){
                echo "<script>alert('data inserted into database')</script>";
            }
            else{
                // echo "<script>alert('Failed')</script>";
                echo "failed";
            }
        }
        else{
            echo "<script>alert('fill the form first')</script>";
        }

        
    }
?>