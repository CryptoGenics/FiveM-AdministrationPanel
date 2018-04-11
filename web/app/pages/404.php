<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $this->community . " &bullet; " . $this->title; ?></title>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width" />
		<link href="<?php echo $GLOBALS['domainname']; ?>app/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo $GLOBALS['domainname']; ?>app/css/animate.min.css" rel="stylesheet"/>
		<link href="<?php echo $GLOBALS['domainname']; ?>app/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
		<link href="<?php echo $GLOBALS['domainname']; ?>app/css/error.css" rel="stylesheet"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="<?php echo $GLOBALS['domainname']; ?>app/css/bootstrap-duration-picker.css">
		<script src="<?php echo $GLOBALS['domainname']; ?>app/js/bootstrap-duration-picker.js"></script>
		<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"/>
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/bootstrap.min.css"/>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link href="<?php echo $GLOBALS['domainname']; ?>app/css/pe-icon-7-stroke.css" rel="stylesheet" />
	</head>
	<body>
		<center>
			<div class="cn">
				<div class="inner">
					<div class="row text-center">
						<div class="col-sm-12">
							<div class="panel panel-error panel-underline">
								<div class="panel-heading panel-error-heading">
									<h4>404</h4>
								</div>
								<div class="panel-body">
									<p>Hmm. Well it appears we broke something. Or you visited an outdated link?</p>
									<p>Either way, click below to go back!</p>
								</div>
								<a href="<?php echo $GLOBALS['subfolder']; ?>/" class="btn btn-success btn-block btn-footer btn-fill btn-error">Go back!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</center>
	</body>
</html>