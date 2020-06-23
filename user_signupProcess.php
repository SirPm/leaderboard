<?php session_start();

// collecting the data verifying data


$username = $_POST['firstname'] ;
$email = $_POST['email'];
$password = $_POST['password']  ;



//name and email validation

if (!preg_match("/^[a-zA-Z]/", $name)){
	$_SESSION['nameErr'] = "invalid first name, use letters only!";
	header("Location: adminRegister.php");
	die();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$_SESSION['emailErr'] = "invalid email address!";
	header("Location:  adminRegister.php");
	die();
}

	
	//Id auto increment
	$allAdmins = scandir("db/admins/");
  $adminCount = count($allAdmins);
  $adminId = ($adminCount-1);
 
	$userObject = [
		'id' =>$Id,
		'firstname' =>$name,
		'email' =>$email,
        'pswrd' => password_hash($pswrd, PASSWORD_DEFAULT),
        'email' =>$email,
		];

	//check if user already exist

	for($counter=0; $counter< count($allAdmins); $counter++){
          $Admin = $allAdmins[$counter+2];
          if($Admin == $email. ".json" ) {
            
			  $_SESSION['error'] = "Registration failed, admin already registered!";
			  header('Location: adminRegister.php');
			  die();
		  }

	//saving the data into the database(folder) and redirecting to login page.
	file_put_contents("db/admins/".$role.".json", json_encode($userObject ));
	$_SESSION["message"] = "Registration successful, you can now login!";
	header("Location: adminLogin.php");
	
}





?>