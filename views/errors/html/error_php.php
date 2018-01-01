<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid well-sm">
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4>A PHP Error was encountered</h4>
		<p>
			<strong>Severity :</strong> <?php echo $severity; ?>
			<br>
			<strong>Message :</strong> <?php echo $message; ?>
			<br>
			<strong>Filename :</strong> <?php echo $filepath; ?>
			<br>
			<strong>Line Number :</strong> <?php echo $line; ?>
		</p>

		<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>
			
			<p><strong>Backtrace :</strong></p>

			<?php foreach (debug_backtrace() as $error): ?>

				<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>

					<div class="well-sm">
						<p>
							<strong>File :</strong> <?php echo $error['file'] ?>
							<br>
							<strong>Line :</strong> <?php echo $error['line'] ?>
							<br>
							<strong>Function :</strong> <?php echo $error['function'] ?>
						</p>						
					</div>

				<?php endif ?>

			<?php endforeach ?>

		<?php endif ?>
	</div>
</div>
