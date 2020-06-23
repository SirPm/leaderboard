<?php session_start();
	  
	  
$email = $_POST['email'] ;
$password = $_POST['password'] ;




	$allAdmins = scandir("db/admins/");
  $adminCount = count($allAdmin);
  
		
	//check if email is registered
     
	for($counter=0; $counter< count($allAdmins); $counter++){
          $currentAdmin = $allAdmins[$counter];
          
			$userString= file_get_contents("db/admins/".$currentAdmin);
            $userObject = json_decode($userString);
		  if($userObject->email == $email){
			  // Password check
echo "got here";
			$passwordFromDb = $userObject->pswrd;
			$passwordFromUser = $pswrd;
			   $passwordFromUser = password_verify($password, $passwordFromDb);
			if($passwordFromUser = $passwordFromDb) {
				
			header('Location: index.php');
				die();   
			}
		  

	}
    $_SESSION['error'] = "Invalid email or password";
header('Location: adminlogin.php');
}
?>