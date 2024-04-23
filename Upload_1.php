<?php include("conn.php"); 
    // error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Recipe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="Upload_1.css">
</head>

<body>
    <nav>
        <div class="logo">
            <p> FLAVOUR_FUSION</p>
        </div>

        <ul>
            <li> <a href="ind.html">home</a></li>
            <li> <a href="category.html">RECIPES</a></li>
            <li> <a href="#">YourRecipe</a></li>
            <li> <a href="ex.php">User'sRecipe</a></li>
            <li> <a href="about.html"> ABOUT_US</a></li>
            <li> <a href="contact.html">CONTACT_US</a></li>
        </ul>
    </nav>

    <main>
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="page">
            <div class="con_head"><h2>Your Recipe</h2></div>
            
                <span class="your_ide"><h3>Give us Your Recipe Ideas, and We will show it on our site</h3></span>

                <div class="sec_in">
                    <div class="inp_rec">
                    <label for="Rec_name">Recipe Name</label>
                    <input type="text" class="Rec_name" name="rec_name">
                    </div>
                </div>

                <div class="sec_in" id="sec_in">
                    <div class="inp_rec">
                    <label for="Rec_name">Photo Of Your Dish:</label>
                    <input type="file" class="Rec_name" id="Rec_name" name="uploadfile">
                    </div>
                </div>

                <div class="sec_in">
                    <div class="inp_rec">
                    <label for="Rec_name">Ingredients</label>
                    <input type="text" class="Rec_name" name="ingred">
                    </div>
                </div>

                <div class="sec_in">
                    <div class="inp_rec">
                    <label for="Rec_name">Procedure</label>
                    <!-- <input type="text" class="Rec_name"> -->
                    <textarea name="proce" id="" cols="30" rows="10" class="Rec_name"></textarea>
                    </div>
                </div>

                <div class="sec_in" id="sec_in2">
                    <div class="inp_rec">
                    <!-- <label for="Rec_name">Recipe Name</label> -->
                    <input type="submit" class="Rec_name" id="sub" value="Submit" name="submit">
                    </div>
                </div>
            
        </div>
        </form>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-links">
                <a href="#">Home</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <p>&copy; 2024 Recipe Sharing Website. All rights reserved.</p>
    </footer>
</body>

</html>

<?php
    if(isset($_POST['submit']))
    {

        $filename = $_FILES['uploadfile']["name"];
        $tempname = $_FILES['uploadfile']["tmp_name"];
        $folder = "images/".$filename;
        move_uploaded_file($tempname, $folder);


        $rec_name = $_POST['rec_name'];
        $ingred = $_POST['ingred'];
        $proce = $_POST['proce'];
        

        if($rec_name != "" && $ingred!="" && $proce!="") {
            $insert_query = "INSERT INTO recipe (title,imgSrc,proce,ingred) VALUES ('$rec_name','$folder','$proce','$ingred')";

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