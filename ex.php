<?php 
    include("conn.php");
    error_reporting(0);
    $query = "SELECT * FROM recipe";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
                // echo $total;
    $result = mysqli_fetch_assoc($data); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> homepage</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .h2{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo">
            <p> FLAVOUR_FUSION</p>
        </div>

        <ul>
            <li> <a href="ind.html">home</a></li>
            <li> <a href="category.html">RECIPES</a></li>
            <li> <a href="Upload_1.php">yourRecipe</a></li>
            <li> <a href="#">User'sRecipe</a></li>
            <li> <a href="about.html"> ABOUT_US</a></li>
            <li> <a href="contact.html">CONTACT_US</a></li>
            
        </ul>
    </nav>

    <main>
        <div class="page">
            <br><br> 
            <span class="h2"><h2 style=" color:orange; " >Our user's Recipe's</h2></span>
            
            <!-- <span class="img">
                <img src="Best-Pav-Bhaji-Recipe-500x500.webp" alt="">
            </span> -->

        <?php
        if($total != 0)
        {
            while($result = mysqli_fetch_assoc($data)){
                echo "
                <span class='img'>
                    <img src=' ".$result['imgSrc']." '>
                </span>
                <br>
                <span class='title'>
                    <h2>".$result['title'] ."</h2>
                </span>
                ";
                ?>
                <h2 class="ing_head">Ingredients</h2>
                <span class="ingredients">
                <ul>
                    <?php
                    echo "<li>".$result['ingred'] ."</li>";
                   
                    ?>
                </ul>
                </span>
                <h2 class="proce_head">Procedure</h2>
                <span class="procedure">
                    <?php
                    echo "
                    <p class='procedure'>".$result['proce'] ."</p>
                    ";
                    ?>
                </span><hr>
                <?php

            }
            }
            else{
                echo "no records";
            }
            ?>

        </div>
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