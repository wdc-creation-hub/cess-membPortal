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
	$token = addslashes($_POST['token']);
 
	$query = "UPDATE boardm
        SET
           name='$name',
           image= '$image',
            email= '$email',
             about= '$about',
            team= '$team',
			fb = '$fb',
			linkedin = '$linkedin',
			year  = '$year'
        WHERE token = '$token'";
		
    $result=$db->query($query);
    if ($result===true) {
		echo '<h1 class="ion-checkmark-circled"></h1>
		<h4>Hi '.$name. ', Edit was succesfully made. <br> Thanks for your valuable time</h4>';
}

    else {
		echo '<h1 class="ion-close-circled"></h1>
		An Error Occured. Please Try Again. Refresh The Page or get Technical Support if problem persists';	
   }
}





?>