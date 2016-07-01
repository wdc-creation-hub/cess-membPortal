<?php
require_once('../db/connect.php');

	if (empty($_POST['name']) ||  empty($_POST['email'])  ||  empty($_POST['team'])  ||  empty($_POST['year'])  ||  empty($_POST['about']) ) {
		echo 0;	
		
	}

elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  echo 1; 
}

	else {
    $name = addslashes($_POST['name']);
	$team = addslashes($_POST['team']);
 	$year= addslashes($_POST['year']);
	$email = addslashes($_POST['email']);
	$fb = addslashes($_POST['fb']);
	$linkedin = addslashes($_POST['linkedin']);
    $about= addslashes($_POST['about']);
  	$image =  addslashes($_POST['pname']);
	$rand= rand(100,999);
	$nname =  preg_replace('/\s+/', '', $name);
	$token = strtolower($rand . "@". $nname.substr(0,5));
 
    $query= "INSERT INTO `boardm` (`name`,`image`,`about`,`team`, `email`, `fb`, `linkedin`, `year`,`token`) VALUES ('$name','$image','$about', '$team', '$email', '$fb', '$linkedin', '$year', '$token')";

    $result=$db->query($query);
    if ($result===true) {
		echo '<h1 class="ion-checkmark-circled"></h1>
		<h3>Hi '.$name. ', Form submitted succesfully.<br> Thanks for your valuable time</h3>
		<h3>System Generated Secret Token: <span style="text-decoration:underline">'.$token.'</span></h3>
		<h4>Now you can anytime edit your info <a href="token.php">here</a> (Remember your secret token)</h4>';
}

    else {
		echo '<h1 class="ion-close-circled"></h1>
		An Error Occured. Please Try Again. Refresh The Page or get Technical Support if problem persists';	
   }
}





?>