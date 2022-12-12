<?php     
session_start();    
if(!isset($_SESSION["sess_user"])){    
    header("location:login.php");    
} else {    
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBC Canteen Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo1.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="member.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="food.php">Foods</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="logout.php">Log-Out</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Food Categories</h2>
            <a href="category-food.php">
            <div class="box-3 float-container">
                <img src="images/breakfast.jpg" alt="BREAKFAST" class="img-responsive img-curve" style="width: 273.26px; height: 280.23px;">
                <br/>
                <br/>
                <br/>
            <h3>BREAKFAST</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/lunch.jpg" alt="LUNCH" class="img-responsive img-curve" style="width: 273.26px; height: 280.23px;">
                <br/>
                <br/>
                <br/>
            <h3>LUNCH</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/snacks.jpeg" alt="Snacks" class="img-responsive img-curve" style="width: 273.26px; height: 280.23px;">
                <br/>
                <br/>
                <br/>
            <h3>SNACKS</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
    <div class="container text-center">
            <br/>
            <p> Developed by Aryan Kotru and Gauravi Kamat</p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>
<?php    
}    
?>  