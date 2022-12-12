<?php
  $con = mysqli_connect("localhost","root","","canteen");
  $sql = "SELECT * FROM `food_cat`";
  $all_categories = mysqli_query($con,$sql);
if(isset($_POST['s']))
{
		$cat = $_POST['cat'];
		$title = $_POST['title'];
		$det = $_POST['detail'];
		$price = $_POST['price'];
		$i = "mimg/".$_FILES['img']['name'];
		move_uploaded_file($_FILES['img']['tmp_name'], $i);

        $id = mysqli_real_escape_string($con,$_POST['Category']);
    
		mysqli_query($con,"insert into menu (category,title,description,price,image) values('$cat','$title','$det','$price','$i')");
		echo "<div style='text-align:center; font-size:1.3em; color:red;'>Data Addedd SuccessFully</div>";
		
}
?>	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">   
</head>
<body>
<?php include "header.php"; ?>

<link rel="stylesheet" type="text/css" href="style.css">

<div class="content">
	<form action="" method="post" enctype="multipart/form-data">
	<table border=0 align="center" bgcolor="white" width="65%" style="box-shadow: 1px 3px 15px 2px;" cellpadding="10" cellspacing="15" >
	

	<tr align="center">
			<td class="title">Upload New Food</td><td><a href="view_food.php" style="color: red; text-decoration: none;">View All Foods</a></td>
    </tr>
    
   <tr align="center">   
   		<td>Choose Food Category</td>
   	    <td>
        <select name="cat">
            <?php
            
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["f_id"];
                ?>">
                    <?php echo $category["catnm"];
                    
                    ?>
                </option>
            <?php
                endwhile;
            ?>
        </select>
   	    </td> 
		</tr>
   	   <tr align="center">
   	   	    <td> Enter Title</td>
   	   	    <td><input type="text" name="title" value="" placeholder="" class="text" required></td>
   	   </tr> 
	<tr align="center"> 
            <td> Enter Food Detail </td>
			<td><textarea rows="4" name="detail" cols="40" class="ar" style="background-color: black; color: white; padding: 10px;"></textarea></td>
	</tr>

	<tr align="center"> 
            <td> Enter Food price </td>
			<td> <input type="text" name="price" class="text"> </td>
	</tr>

    <tr align="center"> 
            <td> Enter Food Image </td>
			<td><input type="File" name="img"  placeholder="" class="" required></td>
	</tr>

    <tr>    
    	<td colspan=2 align="center"> <input type="submit" name="s" value="Upload now" class="btn"> </td>
    </tr>

</table>
</form>

</div>

<!-- footer Section Starts Here -->
<section class="footer" >
        <div class="container text-center">
            <br/>
            <p> Developed by Aryan Kotru and Gauravi Kamat</p>
        </div>
    </section>
    <!-- footer Section Ends Here -->
</body>
</html>