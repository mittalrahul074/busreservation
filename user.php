<?php
include('connection.php');
$sql = "SELECT * FROM `login`"; 
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result); 
if($num>0){ 
while($row = mysqli_fetch_assoc($result)){
echo
"<tr><td>".$row['username']."</td>";
echo "<br>";
}
} 
?>