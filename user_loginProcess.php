<?php session_start();
require_once("functions/alert.php");
require_once("functions/user.php");
	  
	 
$username = $_POST['username'] ;	  
$email = $_POST['email'] ;




	$allUsers = scandir("db/users/");
  $usersCount = count($allUsers);

  	//check if email is registered
     
	for($counter=0; $counter< count($allUsers); $counter++){
		  $currentUser = $allUsers[$counter];
		  if($currentUser == $username. ".json"){

            // email check   

			$userString= file_get_contents("db/users/".$currentUser);
			 $userObject = json_decode($userString);
			$emailFromDb = $userObject->email;
			$emailFromUser = $email;
			 if($emailFromUser == $emailFromDb) {

				//set time and redirect to dashboard  

				header('Location: User.php');
				die();
				} 
				
	}
	$_SESSION["error"]= "Invalid email or password";
header('Location: login.php');
}
?>