<!DOCTYPE html>
<meta name="viewport" content="width=device-width initial-scale=1">
<html>
<head>
	<title>Members Form</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/styles/main.css">
	<link href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css" rel="stylesheet">
	<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"></script>
</head>

<body class="colorido-o">
	<div class="colorido container">
		<h3 class="text-center">Members Form - <small class="colorido">Edit Info</small></h3>
		<span class="pull-right" clickey="none"  click-load="index">Go to main</span>
	</div>
	
	<div class="container panel panel-body" id="first">
	<div id="event-create" class="colorido-t">
		<br>
		<form action="edit-info.php" action="get">
			<label>Enter Your Secret Token:</label>
			<input name="token" class="form-control" type="text" placeholder="xxx@xxxxx.." required>
			<br>
			<button type="submit" class="btn btn-info colorido">Continue</button>
		</form>
		
	</div>
	</div>
	<div class="container panel panel-body hid after colorido-t text-center">
		
	</div>
	<div class="colorido container-fluid foot-c">
			<div class="col-md-3"><h5 class="text-center">Colors Powered By <span  clickey="none" click-load="https://parassharmaa.github.io/Colorido.JS/" style="text-decoration:underline">Colorido.js</span></h5>
			</div>
			<div class="col-md-offset-9"><h5 class="text-center">&copy; 2016 <span  clickey="none" click-load="http://cessgndu.com" style="text-decoration:underline">cessgndu.com </span></h5>
			</div>
	</div>
	
  	<script type="text/javascript" src="assets/scripts/config.json"></script>
  	<script type="text/javascript" src="assets/scripts/colorido.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/scripts/main.js"></script>
</body>

</html>