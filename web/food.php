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
                    <img src="images/logo1.png" alt="Logo" class="img-responsive" style="width: 150px; height: 60px;">
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
            
        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

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

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/mcg.jpg" alt="Relational Rawa Fry" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Relational Rawa Fry</h4>
                    <p class="food-price">₹50</p>
                    <p class="food-detail">
                    This Rawa Fry comes with all the keys, both primary and foreign, that you could want!
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/ACID.jpg" alt="Acid Aloo" class="img-responsive img-curve" style="width: 94.414px; height: 94.414px;">
                </div>

                <div class="food-menu-desc">
                    <h4>ACID Aloo</h4>
                    <p class="food-price">₹40</p>
                    <p class="food-detail">
                    Potatoes that will sear all the amazing properties of DBMS in your brain!
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/53099699.jpeg" alt="JOIN Jalebi" class="img-responsive img-curve" style="width: 94.414px; height: 94.414px;" >
                </div>

                <div class="food-menu-desc">
                    <h4>JOIN Jalebi</h4>
                    <p class="food-price">₹60</p>
                    <p class="food-detail">
                    A jalebi more twisted than the most complex JOIN statement you could think of!
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->


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