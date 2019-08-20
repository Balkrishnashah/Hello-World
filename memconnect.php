<?php include 'memcon.php'; ?>
 
<?php
 
// create a variable
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$department=$_POST['department'];
$email=$_POST['email'];
$contact=$_POST['phnno'];

 
//Execute the query
 
 	mysqli_query($conn,"INSERT INTO  Members(firstname,lastname,address,gender,department,email,contact)
		        VALUES ('$first_name','$last_name','$address','$gender','$department','$email','$contact')");
				
	if(mysqli_affected_rows($conn) > 0){
	echo "<p>Member  Added</p>";
	// echo "<a href="ip_prac1.html">Go Back</a>";
	} 
else {
	echo "Member NOT Added<br />";
	echo mysqli_error ($conn);
	}
 
?>