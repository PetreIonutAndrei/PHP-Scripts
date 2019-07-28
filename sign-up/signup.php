<?php
	if(!isset($_POST['email'])) error("Email is requierd.");

	if(!isset($_POST['psw'])) error("Passward is requierd.");

	if(!isset($_POST['psw-repeat'])) error("Passward repeat is requierd.");
	
	if($_POST['psw'] != $_POST['psw-repeat']) error("Passwords must match");

	$users = getUsers();

	if(in_array($_POST['email'], $users )) error("Users already exist");
	$line = PHP_EOL . $_POST['email'].":".$_POST['psw'];
	file_put_contents("signupusers.txt", $line, FILE_APPEND);
	echo "Welcome!";

	function getUsers(){
		$lines = file("signupusers.txt");
		$users =[];
		
		foreach($lines as $line){
			if(trim($line) == '')
				continue;
			list($email,$psw) = explode(":", trim($line), 2);
			$users[] = $email;
		}
		return $users;
	}
	
	
	function error($message){
		echo $message;
		exit();
	}
?>
