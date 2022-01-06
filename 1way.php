<?php
include('connection.php');
$sql = "SELECT * FROM `oneway`"; 
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result); 
if($num>0){ 
while($row = mysqli_fetch_assoc($result)){
echo
"<tr><td>".$row['fromL']."</td>&nbsp;&nbsp;<td>".$row['toL']."</td>&nbsp;&nbsp;<td
>".$row['date']."</td>&nbsp;&nbsp;<td>".$row['adult']."</td>&nbsp;&nbsp;<td>".$row['child']."</td>";
echo "<br>";
}
} 
?>