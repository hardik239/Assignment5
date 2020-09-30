<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'student');

if(!$conn)
{
echo "Error in connection";
}
else
{
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		if (isset($_POST["FirstName"]) && isset($_POST["LastName"]) && isset($_POST["Email"]) && isset($_POST["Country"]) && isset($_POST["type"]) && isset($_POST["inst"]) &&  isset($_POST["ph"])){
			
			$fname=$_POST["FirstName"];
			$lname=$_POST["LastName"];
			$email=$_POST["Email"];
			$iname=$_POST["inst"];
			$country=$_POST["Country"];
			$work=$_POST["type"];
			$phone=$_POST["ph"];
			
  			
			if($fname!=' ' && $lname!=' ' && $email!=' ' && $country!=' ' && $work!=' ' && $inst!=' ' && $phone!=' '){
			    $sql="INSERT INTO student(FirstName,LastName,Email,Country,type,inst,ph) values ('$fname','$lname','$email','$country','$work','$inst','$phone')";
				$result=mysqli_query($conn,$sql);
				die;
				if(!$result){
					echo "<script>alert('Record inserted');document.location='assign5.php'</script>";
				}
			}
		}
		else
			echo"value not set";
	}
}
?>