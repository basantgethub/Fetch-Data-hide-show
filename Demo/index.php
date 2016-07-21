<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Hide/Show</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script>
		 $(document).ready(function() {
			$('#yesActivity').show();
			$('#noActivity').hide();
			 
			if ($('#yesIcon').prop("checked") == true) {
					$('#yesActivity').show();
					$('#noActivity').hide(); 
			 }
			  
			  
			  if ($('#noIcon').prop("checked") == true) {
				   $('#yesActivity').hide();
					$('#noActivity').show(); 
			 }
			 
			$('#yesIcon').click(function() {
				$('#yesActivity').show();
				$('#noActivity').hide(); 
			});

			$('#noIcon').click(function() {
				$('#yesActivity').hide();
				$('#noActivity').show();
			});  
			
		});
		</script>
	</head>
	<?php $fetchData = 2;?>
	<body>
		<div class="container">
			<div class="page-header">
				<h1>Hide/Show----Default Select Show Data <small>Example of fetch data base hide/show using jquery </small></h1>
			</div>
			<div class="container">
				<div class="row">
					<form  role = "form">
						<div class="col-lg-6">
							<div class="form-group">
								<label class="ui-radio">
								<input type="radio" id="yesIcon" name="typeRadio" value="1" <?php if(isset($fetchData) && $fetchData == 1){ print 'checked';}?> /> <span>yes</span> </label><br/>
								<label class="ui-radio">
								<input type="radio" id="noIcon" name="typeRadio" value="2" <?php if(isset($fetchData) && $fetchData == 2){ print 'checked';}?> /> <span>no</span> </label></br>
							</div>
							<div id="yesActivity">
								 <p>Content goes here.</p>
							</div>
							<div id="noActivity">
								<p>No ......</p>
							</div>
							<div>
								<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-left">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
