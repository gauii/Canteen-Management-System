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
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>ADD CART </h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">

	<form action="" method="post">
		
		<table align="center" border="1" cellspacing="14" cellpadding="12" style="color: black" >

			    <tr align="center">

			    	<td style="color: red">  Product ID  </td>
			    	<td> <input type="hidden" name="item_id"  value="<?php echo $_GET['item_id']; ?>"><?php echo $_GET['item_id']; ?></td>
			    	
			    </tr>

			    <tr align="center">
			    	<td style="color: red">   Your USERID </td>
			        <td> <input type="hidden" name="uid" value="<?php echo $_GET['c_id']; ?>"><?php echo $_GET['c_id']; ?></td>
			    </tr>
			    <tr align="center">
			    	<td style="color: red">   Price </td>
			        <td> <input type="hidden" name="price" value="<?php echo $_GET['item_price']; ?>"><?php echo $_GET['price']; ?></td>
			    </tr>
				    <tr align="center">
			    	<td style="color: red">   QTY</td>
			        <td> <input type="number" name="qty" value="" min=1 max=10 required></td>
			    </tr>

                <tr align="center">
                	<td colspan="4"> <input type="submit" name="sb" value="Add Cart Now"></td>
                </tr>
		</table>
	</form>
			<?php
			if(isset($_POST['sb']))
			{
				$pid = $_POST['item_id'];
				$uid = $_POST['c_id'];
				$price = $_POST['item_price'];
				$qty = $_POST['qty'];
				$total  = $price*$qty;

				include "connect.php";
				mysqli_query($con,"insert into addcart(p_id,u_id,price,qty,total ) values('$pid','$uid','$price','$qty','$total')") or die(mysqli_error($con));
				echo "<script>alert('Your data Is Add Inside Cart')</script>";

			}

			?>
					




				</div>
			</div>
		
		</div>
	</div>
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