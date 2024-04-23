<html>
    <head>
        <title>display recipe</title>
        <style>
            body{
                background:rgb(242, 51, 51);
            }
            table{
                background:white;
            }
            .update{
                background:green;
                color:white;
                border:0;
                outline:none;
                border-radius:3px;
                font-weight:bold;
                height:22px;
                cursor: pointer;
                margin-left:12px
            }
            .delete{
                background:red;
                color:white;
                border:0;
                outline:none;
                border-radius:3px;
                font-weight:bold;
                height:22px;
                cursor: pointer;
            }
        </style>
    </head>    

<?php 
include("conn.php");
error_reporting(0);
$query = "SELECT * FROM recipe";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
// echo $total;
$result = mysqli_fetch_assoc($data);   // database madhla data array chya form madhye aanto


if($total != 0)
{
    ?>
    <h2 align="center">Displaying All Records </h2>
    <table border="1" cellspacing="3" align="center">
        <tr>
        <th width="">ID</th>
        <th>Title</th>
        <th>ingredients</th>
        <th>recipe</th>
        <th>Operations</th>
        </tr>



<?php
    // echo "table has record <br>";
    while($result = mysqli_fetch_assoc($data)) {
        // Access the 'lname' column for each row
        echo "
        <tr>
            <td>".$result['id'] ."</td>
            <td>".$result['title'] ."</td>
            <td>".$result['ingred'] ."</td>
            <td>".$result['proce'] ."</td>
            <td><a href='update.php?id=".$result['id']." '><input type='submit' value='update' class='update'></a>
            <a href='delete.php?id=".$result['id']."'><input type='submit' value='delete' class='delete' onclick='return checkdelete()' ></a></td>
        </tr>
        ";
        
    }
    // echo $result['fname'] . " ".$result['lname'];
}
else{
    echo "no records";
}
?>

</table>

<script>
    function checkdelete(){
        return confirm("Are you sure that you want to delete this record !");
    }
</script>

<!-- echo $result['fname'] . " ".$result['lname']." ".$result['description']."<br>"; -->
</html>
