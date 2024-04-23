<?php include("conn.php"); 
    //   error_reporting(0);

      $ID = $_GET['id'];
  
      $query = "SELECT * FROM recipe where id ='$ID' ";
      $data = mysqli_query($conn, $query);
      $total = mysqli_num_rows($data);
  
      $result = mysqli_fetch_assoc($data);
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update recipe</title>
</head>
<body>
    <form action="" method="POST">
        <label for="title">Title</label>
        <input type="text" class="title" value="<?php echo $result['title']; ?>" id="title" name="title">
        <label for="ingred">Ingredients</label>
        <input type="text" class="ingred" value="<?php echo $result['ingred']; ?>" id="ingred" name="ingred">
        <label for="desc">description</label>
        <input type="text" class="desc" value="<?php echo $result['proce']; ?>" id="desc" name="proce">
        <input type="submit" name="update">
    </form>
</body>
</html>


<?php
    if(isset($_POST['update']))
    {

        // $filename = $_FILES['uploadfile']["name"];
        // $tempname = $_FILES['uploadfile']["tmp_name"];
        // $folder = "images/".$filename;
        // move_uploaded_file($tempname, $folder);


        $title = $_POST['title'];
        $ingred = $_POST['ingred'];
        $proce = $_POST['proce'];
        

        if($title != "" && $ingred!="" && $proce!="") {
            
            $insert_query = "UPDATE recipe set title = '$title', ingred='$ingred', proce='$proce' where id='$ID' ";

            $data = mysqli_query($conn, $insert_query);

            if($data){
                echo "<script>alert('RECORD UPDATED')</script>";
                ?>
                
                <meta http-equiv = "refresh" content = "1; url = http://localhost/recipe/display_rec.php" />

                <?php
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