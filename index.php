<?php
if (isset($_POST['btnSubmit'])) {
	$Name = $_POST['name'];
	$Birthday = $_POST['birthday'];

	//TEXT File
	$DataTextFile = fopen("data/data.txt", "a");
	$TextFormat = $Name."|".$Birthday."\n";
	fwrite($DataTextFile, $TextFormat);
	fclose($DataTextFile);

	//XML File
	$dataXML = "data/data.xml";
	$XML = simplexml_load_file($dataXML);
	$Community = $XML->community;
	$MemberNode = $Community->addChild('member');
	$NameNode = $MemberNode->addChild('name', $Name);
	$BirthdayNode = $MemberNode->addChild('birthday', $Birthday);
	$XML->asXML($dataXML);
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">

		<script src="js/jquery.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="well well-sm">
					  <form class="form-horizontal" action="" method="post" id="SignUpForm">
						  <fieldset>
						    <legend class="text-center">Sign Up</legend>
						    <div>Complete the following fields.</div>
						    <br/>
						    <!-- Name -->
						    <div class="form-group">
						      <label class="col-md-3 control-label" for="name">Name <br/> <small>First name only</small></label>
						      <div class="col-md-9">
						      	<br/>
						        <input id="name" name="name" type="text" class="form-control">
						      </div>
						    </div>

						    <!-- Birthday -->
						    <div class="form-group">
						      <label class="col-md-3 control-label" for="birthday">Birthday <br/> <small>mm-dd-yyyy</small></label>
						      <div class="col-md-9">
						      	<br/>
						        <input id="birthday" name="birthday" type="text" class="form-control">
						      </div>
						    </div>

						    <!-- Form actions -->
						    <div class="form-group">
						      <div class="col-md-12 text-center">
						        <button type="submit" class="btn btn-primary btn-sl" id="btnSubmit" name="btnSubmit">Submit</button>
						        <a class="btn btn-primary btn-sl" href="http://localhost/PHPExam/data/data.xml" target="_blank">Export to XML</a>
						      </div>
						    </div>
						  </fieldset>
					  </form>
					</div>
				</div>
			</div>
		</div>

		<script src="js/bootstrap.min.js"></script>
		<script src="js/moment-with-locales.js"></script>
		<script src="js/bootstrap-datetimepicker.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>