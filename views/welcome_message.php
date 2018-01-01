<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png">

		<title>Welcome to CodeIgniter</title>
	
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid well-lg">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						<big>Welcome to CodeIgniter!</big>
					</div>
				</div>
				<div class="panel-body">
					<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
					<pre>application/views/welcome_message.php</pre>
					<p>If you would like to edit this page you'll find it located at:</p>
					<pre>application/views/welcome_message.php</pre>
					<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
				</div>
				<div class="panel-footer text-right">
					Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
				</div>
			</div>
		</div>

		<!-- Optional JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
