<!doctype html>  
<html>  
<head>  
<title>Login</title>  
<style>   
body
{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background color: white;
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

h3 
{  
    color:#BD3232;  
    font-family: verdana;  
    font-size: 200%;  
} 
</style>  
</head>  
<body>  
     <center><h1>LOG-IN HERE</h1></center>  
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a> |  <a href="index1.html">Home</a> |  <a href="../web/admin/aindex.php">Admin LogIn</a></p>  
<h3>Login Form</h3>  
<form action="" method="POST">  
Username: <input type="text" name="user"><br /> <br/> 
Password: <input type="password" name="pass"><br /> <br/>  
<input type="submit" value="Login" name="submit" />  
</form>  
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) 
{  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
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
  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: member.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html> 