$('a[clickey]').click(function (e) {
	e.preventDefault();
	$next = this.getAttribute("href");
	$animate = this.getAttribute("clickey");
	if($animate=="none") {
		window.location.href=$next;
	} else {
		$('body').addClass('animated' + " " + $animate).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			window.location.href = $next;
		});
	}
})

$('div[clickey],span[clickey]').css({
		"cursor":"pointer",
		"pointer-events":"auto"
});


$('div[clickey],span[clickey]').click(function (e) {
	e.preventDefault();
	$next = this.getAttribute("click-load");
	$animate = this.getAttribute("clickey");
	if($animate=="none") {
		window.location.href=$next;
	} else {
		$('body').addClass('animated' + " " + $animate).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			window.location.href = $next;
		});
	}
})

function clickeyAll(n) {
	$('a').click(function (e) {
	e.preventDefault();
	$next = this.getAttribute("href");
	
	if(n=="none") {
		window.location.href=$next;
	} else {
		$('body').addClass('animated' + " " + n).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			window.location.href = $next;
		});
	}
})
}

	$(document).ready(function() {
			$('#submit').click(function() {
				$('#submit').text("Please Wait");
				$data = $('#smt').serialize();
				$.post('functions/submit_info.php',$data,response);
			
				
				function response(res) {
				if(res==0) {
						$('#submit').addClass("animated shake").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
							$('#submit').removeClass('animated shake');
						});
						$("#pro").text("Please fill up the required fields");
					}
					
				else if (res==1) {
						$('#submit').addClass("animated shake").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
							$('#submit').removeClass('animated shake');
						});
						$("#pro").text("Please Enter Valid EmailId");
					}
					else {
					$('#first').addClass('animated zoomOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
							$('#first').addClass('hid');
						$('.after').removeClass('hid');
						$('.after').html(res);
						$('.after').addClass('animated zoomIn');
					});
				
				}
				}	
		})
			
				$('#save').click(function() {
				$('#save').text("Please Wait");
				$data = $('#edit').serialize();
				$.post('functions/edit_info.php',$data,response);
			
				
				function response(res) {
				if(res==0) {
						$('#save').addClass("animated shake").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
							$('#save').removeClass('animated shake');
						});
						$("#pro").text("Please fill up the required fields");
					}
					
				else if (res==1) {
						$('#save').addClass("animated shake").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
							$('#save').removeClass('animated shake');
						});
						$("#pro").text("Please Enter Valid EmailId");
					}
					else {
					$('#first').addClass('animated zoomOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
							$('#first').addClass('hid');
						$('.after').removeClass('hid');
						$('.after').html(res);
						$('.after').addClass('animated zoomIn');
					});
				
				}
				}
				
		})
			
			$('input, textarea').addClass('colorido-t');
		})