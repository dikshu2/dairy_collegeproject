
<?php 
	$db = mysqli_connect('localhost', 'root', '', 'miniproject');

	// if (isset($_POST['submit'])) {
		$firstname = $_POST['fname'];
        $lastname = $_POST['lname'];

        $email = $_POST['email'];
        $msg= $_POST['message'];
        
		echo $firstname;
		echo $msg;

	if(mysqli_query($db, "INSERT INTO tbl_contact (first_name, last_name, email, message) VALUES 
			('$firstname','$lastname', '$email','$msg')")) {
	// 	$sqlcheck= "SELECT * from student where email='$email' OR phonenumber='$phonenumber'";
	// 	$checkresult= $db->query($sqlcheck);
	// if(!$checkresult->num_rows==0){
	// die("Email/number already exist.");
	// }
		// echo " Data inserted successfully.";	

		$msg = "Saved successfully.";
        header('location:contact.php?errmsg='.$msg);
	} else {
		$msg = "Failed to save contact.";
        header('location:contact.php?errmsg='.$msg);
	}
	// }
 ?>