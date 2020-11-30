<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$street = $_POST['street'];
	$street2 = $_POST['street2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$country = $_POST['country'];
	$size = $_POST['size'];
	$description = $_POST['description'];
	$extra = $_POST['extra'];

	//Create a connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into test(firstName, lastName, email, phone, street, street2, city, state, zip, country, size, description, extra)values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssissssissss",$firstName, $lastName, $email, $phone, $street, $street2, $city, $state, $zip, $country, $size, $description, $extra);
		$stmt->execute();
		echo "Form has been sent....";
		$stmt->close();
		$conn->close();
	}/
?>