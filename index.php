<!---

                                 ______                                       _     _                 
                                |___  /                                      | |   (_)                
  _ __     __ _   _ __    __ _     / /   ____     ___   _ __    ___    __ _  | |_   _    ___    _ __  
 | '_ \   / _` | | '__|  / _` |   / /   |_  /    / __| | '__|  / _ \  / _` | | __| | |  / _ \  | '_ \ 
 | |_) | | (_| | | |    | (_| |  / /__   / /    | (__  | |    |  __/ | (_| | | |_  | | | (_) | | | | |
 | .__/   \__,_| |_|     \__,_| /_____| /___|    \___| |_|     \___|  \__,_|  \__| |_|  \___/  |_| |_|
 | |                                                                                                  
 |_|                                                                                                  

-->
<!DOCTYPE html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="paraZz">
<html>

<head>
	<title>Members Form</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/main.css">
	<link href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css" rel="stylesheet">
	<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function (e) {
			$("#uploadForm").on('submit', (function (e) {
				$("#picupld").val("Uploading Pic....");
				e.preventDefault();
				$.ajax({
					url: "functions/upload.php"
					, type: "POST"
					, data: new FormData(this)
					, contentType: false
					, cache: false
					, processData: false
					, success: function (data) {
						$("#targetLayer").html(data);
						$("#picupld").val("Done");
					}
					, error: function () {}
				});
			}));
		});

		function setname() {
			var nameofpic = document.getElementById('picupname').value;
			var filtername = nameofpic.replace("C:\\fakepath\\", "");
			document.getElementById('picname').value = filtername;
		}
		window.setInterval(setname, 20);
	</script>
</head>

<body class="colorido-o">
	<div class="modal fade" id="picup" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Upload Image</h4>
					<hr> </div>
				<div class="modal-body">
					<form id="uploadForm" action="upload.php" method="post">
						<div id="targetLayer">No Image</div>
						<div id="uploadFormLayer">
							<br>
							<label>Upload Image File:</label>
							<br/>
							<input name="userImage" type="file" id="picupname" class="inputFile form-control">
							<br>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" id="picupld" class="btn btn-info colorido" style="color:white">Submit</button>
					</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="colorido container">
		<h3 class="text-center">Members Form</h3> <span class="pull-right" clickey="none" click-load="token">Edit Info</span> </div>
	<div class="container panel panel-body" id="first">
		<div id="event-create" class="colorido-t">
			<br>
			<form id="smt">
				<label>Name *</label>
				<input name="name" class="form-control" type="text" placeholder="Lionel Messi">
				<br>
				<div class="btn btn-info colorido" data-toggle="modal" data-target="#picup">Add Photo
					<input style="display:none" id="picname" name="pname"> </div><span> (Your Pic will be public) </span>
				<br>
				<br>
				<label>Role / Team Name *</label>
				<input name="team" type="text" class="form-control" placeholder="Technical, Literary etc.">
				<br>
				<label>Term Year *</label>
				<select class="form-control" name="year">
					<option>2015</option>
					<option>2016</option>
				</select>
				<br>
				<label>Email *</label>
				<input name="email" type="text" class="form-control" placeholder="youremail@domain.com">
				<br>
				<label>Google +</label>
				<input name="fb" type="text" class="form-control" placeholder="https://">
				<br>
				<label>LinkedIn</label>
				<input name="linkedin" type="text" class="form-control" placeholder="https://">
				<br>
				<label>About Yourself</label>
				<textarea name="about" class="form-control" placeholder="I am Thinker, Inventer, Game Changer, Creator Etc."></textarea>
				<br>
				<h5 id="pro"></h5>
				<div type="submit" class="btn btn-info colorido" id="submit">Submit</div>
			</form>
		</div>
	</div>
	<div class="container panel panel-body hid after colorido-t text-center"> </div>
	<div class="colorido container-fluid foot-c">
		<div class="col-md-3">
			<h5 class="text-center">Colors Powered By <span  clickey="none" click-load="https://parassharmaa.github.io/Colorido.JS/" style="text-decoration:underline">Colorido.js</span></h5> </div>
		<div class="col-md-offset-9">
			<h5 class="text-center">&copy; 2016 <span  clickey="none" click-load="http://cessgndu.com" style="text-decoration:underline">cessgndu.com </span></h5> </div>
	</div>
	
	<script type="text/javascript" src="assets/scripts/config.json"></script>
	<script type="text/javascript" src="assets/scripts/colorido.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/scripts/main.js"></script>

</body>

</html>