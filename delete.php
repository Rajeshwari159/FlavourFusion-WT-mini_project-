<?php
include("conn.php");

$ID = $_GET['id'];
$query = "DELETE FROM recipe where id = '$ID' ";
$data = mysqli_query($conn,$query);

if($data){
    echo "<script>alert('RECORD DELETED')</script>";
    ?>
     <meta http-equiv = "refresh" content = "0; url = http://localhost/recipe/display_rec.php" />
    <?php
}
else{
    echo "failed to delete";
}
?>

