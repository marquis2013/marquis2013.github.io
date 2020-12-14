<?php  
    $servername ="localhost";  
    $username ="root";  
    $password ="";
    $database_name ="fancy";

    $conn=mysqli_connect($servername,$username,$password,$database_name);
    // Check Connection
    if(!$conn)
    {
    	die("Connection Failed:" . mysqli_connect_error());
    }

    if(isset($_POST['save']))
    {
    	$firstName = $_POST['firstName'];
    	$lastName = $_POST['lastName'];
    	$email = $_POST['email'];
    	$phone = $_POST['phone'];
    	$street = $_POST['street'];
    	$state = $_POST['state'];
        $city = $_POST['city'];
    	$zip = $_POST['zip'];
    	$country = $_POST['country'];
    	$size = $_POST['size'];
    	$description = $_POST['description'];
    	$extra = $_POST['extra'];

    	$sql_query = "INSERT INTO cup_build (firstName,lastName,email,phone,street,city,state,zip,country,size,description,extra)
    	VALUES ('$firstName' , '$lastName' , '$email' , '$phone' , '$street' , '$city' , '$state' , '$zip' , '$country' , '$size' , '$description' , '$extra')";

        if (mysqli_query($conn, $sql_query))
        {
            echo "New Details Entry Inserted Successfully !";
        }
        else
        {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>   
