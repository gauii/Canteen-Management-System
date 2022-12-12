<!doctype html>    
<html>    
<head>    
<title>Register</title>    
    <style>     
    body
    {    
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;
    background: white;     
    color: #BD3232;    
    font-family: verdana;    
    font-size: 100%    
    }

    h1
    {    
    color:#BD3232;  
    font-family: verdana;  
    font-size: 200%; 
    }    
    
    h2 
    {    
    color:#BD3232;  
    font-family: verdana;  
    font-size: 200%;     
    }
</style>    
</head>    
<body>    
       
    <center><h1>REGISTER HERE</h1></center>   
    <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>      
    <h2>Registration Form</h2>
    <form action="" method="POST">  
Username: <input type="text" name="user"><br /> <br/> 
Password: <input type="password" name="pass"><br /> <br/> 
First Name: <input type="text" name="fname"><br /> <br/> 
Last Name: <input type="password" name="lname"><br /> <br/>
Phone No.: <input type="number" name="c_phone"><br /> <br/>     
<input type="submit" value="Register" name="submit" />  
</form>  
<?php    
if(isset($_POST["submit"]))
{    
if(!empty($_POST['user']) && !empty($_POST['pass'])) 
{    
    $user=$_POST['user'];    
    $pass=$_POST['pass'];   
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $c_phone=$_POST['c_phone'];
    $con = mysqli_connect("localhost","root","","canteen");
// Check connection
if (mysqli_connect_errno()) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
 
if ($query = mysqli_query($con, "SELECT * FROM login WHERE username='".$user."'")) 
{
    $numrows= mysqli_num_rows($query); 
  }
   
    if($numrows==0)    
    {    
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";
    $made = "INSERT INTO customers(fname,lname,c_phone) VALUES('$fname','$lname','$c_phone')";

    $result=mysqli_query($con,$sql);    
        if($result)
        {    
         echo "Account Successfully Created";    
        }
        else 
        {    
         echo "Failure!";    
        }    
    
    } 
    else 
    {    
    echo "That username already exists! Please try again with another.";    
    }    
    mysqli_close($con); 
} 
else 
{    
    echo "All fields are required!";    
}    
}    
?>    
</body>    
</html>  