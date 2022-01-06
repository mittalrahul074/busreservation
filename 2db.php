<?php
include('connection.php');  
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['from']=='' || $_REQUEST['to']=='' || $_REQUEST['departure']==''|| $_REQUEST['adults']==''|| $_REQUEST['return']=='')
{
Echo "please fill the empty field.";
}
Else
{
    //  INSERT INTO `oneway` (`fromL`, `toL`, `date`, `adult`, `child`) VALUES ('mumbai', 'delhi', '2021-12-22', '1', '0');
$sql="INSERT INTO `2way` (`fromL`, `toL`, `date`, `rdate`, `adult`, `child`) VALUES('".$_REQUEST['from']."', '".$_REQUEST['to']."', '".$_REQUEST['departure']."', '".$_REQUEST['return']."', '".$_REQUEST['adults']."', '".$_REQUEST['children']."')";
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