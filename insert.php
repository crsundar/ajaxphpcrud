<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Thapa Insert Using Ajax</title>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Insert Data Using Ajax</h1>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form id="myform" action="insertphp.php" method="POST">
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="username" class="form-control">
					</div>
					<br>
					<div class="form-group">
						<label>Password:</label>
						<input type="text" name="password" class="form-control">
					</div>
					<br>
					<button class="btn btn-success" id="submit" name="submit">Submit</button>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
		<br><br>
		<h2 class="text-center bg-primary text-white">Display data using Ajax</h2>
		<br>
		<button id="displaydata" class="btn btn-danger">Display</button>
		<br><br>
		<table class="table table-striped table-bordered text-center">
			<thead>
				<th>Id</th>
				<th>Name</th>
				<th>Password</th>
			</thead>
			<tbody id="response">

			</tbody>
		</table>
	</div>
	<script>
		$(document).ready(function(){
			var form = $('#myform');
			$('#submit').click(function(){
				$.ajax({
					url: form.attr("action"),
					type: 'POST',
					data: $("#myform input").serialize(),

					success: function(data){
						console.log(data);
					}
				});
			});

		//$('#displaydata').click(function(){
			displaydata();
			function displaydata(){
				$.ajax({
					url: 'displayajax.php',
					type: 'POST',

					success: function(responsedata){
						$('#response').html(responsedata);
					}
				});
			}
		});
	//});
	</script>
</body>
</html>