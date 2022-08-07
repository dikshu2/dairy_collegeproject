<?php
session_start();
include('connect.php');
if(isset($_POST['submit'])){
	$cash=$_POST['cash'];
	$name=$_POST['fullname'];
	$number=$_POST['phone_no'];
	$email=$_POST['email'];
	$address=$_POST['address'];
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST['submit'])){
	$query1 = "INSERT into customer(Fullname,Email,Phone,address,Delivery) values('$name','$email','$number','$address','$cash')";
	if(mysqli_query($conn,$query1)){
		$Order_Id=mysqli_insert_id($conn);
		$_SESSION['order'] = $Order_Id;
		$query2="INSERT INTO `customer_order`(`order_id`,`item_name`,`price`,`quantity`) VALUES (?,?,?,?)";
		$stmt=mysqli_prepare($conn, $query2) or die("Failed to prepare");
		if($stmt){
			mysqli_stmt_bind_param($stmt, "isii", $Order_Id, $Item_Name, $Price, $Quantity) or die("Failed to bind param");
			foreach($_SESSION['cart'] as $key => $values)
			{
				$Item_Name = $values['Item_Name'];
				$Price = $values['Price'];
				$Quantity = $values['Quantity'];
				mysqli_stmt_execute($stmt);
			}
			// unset($_SESSION['cart']);
			echo "<script>
		window.location.href='buy.php';
		</script>";
		}
	}
	else{
		echo "<script>
		alert('SQL Error');
		window.location.href='cart.php';
		</script>";
	}
}
}
// header("location:buy.php");

?>
