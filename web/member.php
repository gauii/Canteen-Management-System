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
    
<style>
    h3 
{  
    color:#BD3232;  
    font-family: verdana;  
      
} 

h1 
{  
    color:white;  
    font-family: verdana;  
    font-size: 200%;  
}  
</style>
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo1.png" alt="Restaurant Logo" class="img-responsive" style="width: 150px; height: 60px;">
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

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
                <h1 class="display-5 fw-normal">Welcome to DON BOSCO'S CANTEEN, <?=$_SESSION['sess_user'];?></h1>
              <h1 class="lead fw-normal">Food ordering system of DON BOSCO COLLEGE OF ENGINEERING</h1>
        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

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

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu" style=" height: 450px;">
        <div class="container" >
            <h2 class="text-center">Recommended</h2>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/Khaman-Dhokla-6.jpg" alt="Dependency Dhokla" class="img-responsive img-curve"style="width: 94.414px; height: 94.414px;"  m[0000000000000000000000000]>
                </div>

                <div class="food-menu-desc">
                    <h4>Dependency Dhokla</h4>
                    <p class="food-price">₹20</p>
                    <p class="food-detail">
                        Ever felt like your Dhoklas just were not connected enough?
                    </p>
                    <br/>
                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/square-1462744141-toffee-banofi-sundae.jpg" alt="Chicke Hawain BREAKFAST" class="img-responsive img-curve" style="width: 94.414px; height: 94.414px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Schema Sundae</h4>
                    <p class="food-price">₹150</p>
                    <p class="food-detail">
                        A sundae as perfectly constructed as the schema for this database!
                    </p>
                    <br/>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/Closure Chai.jpg" alt="Chicke Hawain LUNCH" class="img-responsive img-curve" style="width: 94.414px; height: 94.414px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Closure Chai</h4>
                    <p class="food-price">₹10</p>
                    <p class="food-detail">
                        The perfect cup to help you find closure from a relationship, whether in life or in a database!
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/NN.jpg" alt="Normalized Noodles" class="img-responsive img-curve" style="width: 94.414px; height: 94.414px;">
                </div>

                <div class="food-menu-desc">
                    <h4>Normalized Noodles</h4>
                    <p class="food-price">₹100</p>
                    <p class="food-detail">
                        Noodles that have been rid of all composite attributes, parrtial and transitive dependencies!
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

          
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p> Developed by Aryan Kotru and Gauravi Kamat</p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>
<?php    
}    
?>  