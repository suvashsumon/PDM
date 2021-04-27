<?php
	$message = "";
	    // Includs database connection
	    include "db_connect.php";

	    // Gets the data from post
	    $name = $_POST['name'];
	    $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
	 
	    // Makes query with post data
	    $query = "INSERT INTO admins (name, email, phoneno, username, pass) VALUES ('$name', '$email', '$phoneno', '$username', '$pass')";

	    if($pass == $repass)
		{
			if( $db->exec($query) ){

				header("Location: ../application/dashboard.html");
	
			}else{
	
				echo "Something went wrong ..... contact with developer.";
	
			}
		}
		else 
		{
			header("Location: sign-up.html");
		}

?>