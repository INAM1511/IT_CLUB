<?php
$db = mysqli_connect('localhost', 'root', 'root', 'forclub');
if(!$db){
	echo"connection failed";
}
{
	echo"connection successfull";
}

if(isset($_POST['submit'])){
$sname  = $_POST['sname'];
$fname  = $_POST['fname'];
$dbc  = $_POST['dbc'];
$class  = $_POST['class'];
$house = $_POST['house'];
$cell = $_POST['cell'];
$email = $_POST['email'];
$course   = $_POST['course'];


$sql = "INSERT INTO registration(sname,fname,dbc,class,house,cell,email,course)VALUES('$sname','$fname','$dbc','$class','$house','$cell','$email','$course')";

if(mysqli_query($db,$sql))
{
	echo"New Record Added";
}
else{
		echo "Error:" . $sql . "<br>" . $db->error;
}
}

?>
