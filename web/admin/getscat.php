<?php
$q = $_GET['q'];

include "connect.php";


$sql="SELECT * FROM food_cat WHERE catnm = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<select name='cat' class='text'>";
while($row = mysqli_fetch_array($result)) {
  
  echo "<option value='" . $row['catnm'] . "'>". $row['catnm'] ."</option>";
  
}
echo "</select>";

?>