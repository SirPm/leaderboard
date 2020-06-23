<?php session_start();

// collecting the data verifying data


$username = $_POST['username'] ;
$email = $_POST['email'];
$password = $_POST['password']  ;
$password2 = $_POST['password2'] ;



//name, email and password validation

if (!preg_match("/^[a-zA-Z]/", $username)){
	$_SESSION['error'] = "invalid first name, use letters only!";
	header("Location: adminsignup.php");
	die();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$_SESSION['error'] = "invalid email address!";
	header("Location:  adminsignup.php");
	die();
}
if ($password!= $password2){
	$_SESSION['error'] = "passwords don't match";
	header("Location:  adminsignup.php");
	die();
}

	
	//Id auto increment
	$allAdmins = scandir("db/admins/");
  $adminCount = count($allAdmins);
  $Id = ($adminCount-1);
 
	$userObject = [
		'id' =>$Id,
		'username' =>$username,
		'email' =>$email,
		'password' => password_hash($password, PASSWORD_DEFAULT),
		];

	//check if user already exist

	for($counter=0; $counter< count($allAdmins); $counter++){
          $Admin = $allAdmins[$counter+2];
          if($Admin == $email. ".json" ) {
            
			  $_SESSION['error'] = "Registration failed, admin already registered!";
			  header('Location: adminsignup.php');
			  die();
		  }

	//saving the data into the database(folder) and redirecting to login page.
	file_put_contents("db/admins/".$userObject['email'].".json", json_encode($userObject ));
	$_SESSION["message"] = "Registration successful, you can now login!";
	header("Location: adminLogin.php");
	
}





?>