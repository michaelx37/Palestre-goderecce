<?php
/*
	$dbAddress = "127.0.0.1";
	$dbAdmin = "root";
	$dbPass = "mic2837mic2837";
	$dbSelect = "tesdb";
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$bdate = test_input($_POST["regBDay"]);
	}
	function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$connect = new mysqli($dbAddress, $dbAdmin, $dbPass, $dbSelect) or die("Cannot connect to database");
		
		$regQuery = mysqli_query($connect," SELECT * FROM user_list WHERE user_nickname = '$nick' ");	
		$numRows = mysqli_num_rows($regQuery);
		
		if ($numRows == 0) {
			$newRowQuery = " INSERT INTO prova (user_nickname) VALUES ('$nick') ";
			if ($connect->query($newRowQuery) === TRUE) { //SISTEMARE
				$timestamp = date("Y-m-d-H-i-s",time());
				/*$query_datelog = *//*mysqli_query($connect," UPDATE user_list SET user_last_login = '$timestamp' WHERE user_nickname = '$nick' ");
			}
		}else {
			die("Username non disponibile!");
		}
		mysqli_close($connect);
	}
	*/
	
?>	
	
	
<?php
  //date in mm/dd/yyyy format; or it can be in other formats as well
  //$birthDate = "08/30/1990";
  $birthDate = "30/08/1990";
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[0], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  echo "Age is: " . $age;
?>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php	
	/*
	
	
	$nickErr = $pswErr = $pswCheckErr = $emailErr = $firstNameErr = $lastNameErr = $birthErr = $genderErr = "";
	$nick = $psw = $pswCheck = $email = $firstName = $lastName = $birth = $gender = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
	  if (empty($_POST["regUsername"])) {
		$nickErr = "Campo obbligatorio";
	  } else {
		$nick = test_input($_POST["regUsername"]);
		// check if name only contains letters, numbers and whitespace
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$nick)) {
		  $nickErr = "Sono consentite solo lettere, numeri e spazi";
		}
	  }
		
	  if (empty($_POST["regPassword"])) {
		$pswErr = "Campo obbligatorio";
	  } else {
		$psw = test_input($_POST["regPassword"]);
		// check if name only contains letters, numbers and whitespace
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$psw)) {
		  $pswErr = "Sono consentite solo lettere, numeri e spazi";
		}
	  }
	  /*		
	  if (empty($_POST["regPasswordCheck"])) {
		$pswCheckErr = "Campo obbligatorio";
	  } else {
		$pswCheck = test_input($_POST["regPasswordCheck"]);
		// check if name only contains letters, numbers and whitespace
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$pswCheck)) {
		  $pswCheckErr = "Sono consentite solo lettere, numeri e spazi";
		}
	  }
	  *//*
	  if (empty($_POST["regEmail"])) {
		$emailErr = "Campo obbligatorio";
	  } else {
		$email = test_input($_POST["regEmail"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Email non valida";
		}
	  }
	  
	  if (empty($_POST["regFirstName"])) {
		$firstNameErr = "Campo obbligatorio";
	  } else {
		$firstName = test_input($_POST["regFirstName"]);
		// check if name only contains letters, numbers and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
		  $firstNameErr = "Sono consentite solo lettere e spazi";
		}
	  }
	  
	  if (empty($_POST["regLastName"])) {
		$lastNameErr = "Campo obbligatorio";
	  } else {
		$lastName = test_input($_POST["regLastName"]);
		// check if name only contains letters, numbers and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
		  $lastNameErr = "Sono consentite solo lettere e spazi";
		}
	  }
	  /*
	  if (empty($_POST["regBirth"])) {
		$birthErr = "Campo obbligatorio";
	  } else {
		$birth = test_input($_POST["regBirth"]);
		$bday = date('Y-m-d',strtotime($_POST['userSubmittedBDay']));
	  }
	  */ /* 
	  if (empty($_POST["regGender"])) {
		$genderErr = "Specificare il sesso";
	  } else {
		$gender = test_input($_POST["regGender"]);
	  }*/
	  /* 
	  if (empty($_POST["website"])) {
		$website = "";
	  } else {
		$website = test_input($_POST["website"]);
		// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
		  $websiteErr = "Invalid URL";
		}
	  }*//*
	}
	
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	/*
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$connect = new mysqli($dbAddress, $dbAdmin, $dbPass, $dbSelect) or die("Cannot connect to database");
		
		$regQuery = mysqli_query($connect," SELECT * FROM user_list WHERE user_nickname = '$nick' ");	
		$numRows = mysqli_num_rows($regQuery);
		
		if ($numRows == 0) {
			$newRowQuery = " INSERT INTO user_list (user_nickname, user_password, user_last_name, user_first_name, user_gender, user_mail) VALUES ('$nick', '$psw', '$lastName', '$firstName', '$gender', '$email') ";
			//mysqli_query($connect, $newRowQuery);
			if ($connect->query($newRowQuery) === TRUE) { //SISTEMARE
				$timestamp = date("Y-m-d-H-i-s",time());
				/*$query_datelog = *//*mysqli_query($connect," UPDATE user_list SET user_last_login = '$timestamp' WHERE user_nickname = '$nick' ");
			}
		}else {
			die("Username non disponibile!");
		}
		mysqli_close($connect);
	}

echo "<h2>Your Input:</h2>";
echo $nick;
echo "<br>";
echo $psw;
echo "<br>";
echo $lastName;
echo "<br>";
echo $firstName;
echo "<br>";
echo $gender;
echo "<br>";
echo $email;

echo "<h2>Errors:</h2>";
echo "nickErr: ".$nickErr;
echo "<br>";
echo "pswErr: ".$pswErr;
echo "<br>";
echo "lastNameErr: ".$lastNameErr;
echo "<br>";
echo "firstNameErr: ".$firstNameErr;
echo "<br>";
echo "genderErr: ".$genderErr;
echo "<br>";
echo "emailErr: ".$emailErr;*/

?>