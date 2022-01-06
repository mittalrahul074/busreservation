<?php
include('connection.php'); 
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''|| $_REQUEST['repassword']=='')
{
Echo "please fill the empty field.";
}
Else
{
    //  ('74@gmail.com', '74@gmail.com')
$sql="INSERT INTO `login` (`username`, `password`) VALUES('".$_REQUEST['email']."', '".$_REQUEST['password']."')";
$res=mysqli_query($con,$sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>