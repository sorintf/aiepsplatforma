
<?php include_once('views/_head.php') ?>

<?php include_once('views/_header.php') ?>

	<div class="section login">
		<div class="container">
			<h1 class="section-title">Register email confirm send</h1>

			<?php include_once('views/_messages.php'); ?>

			<div class="card card-form">
				<form action="" method="post" class="needs-validation" novalidate>
					<div class="form-input">
						<label for="confirmation-email" class="form-label">Email</label>
						<div class="input-group has-validation">
							<input type="email" class="form-control <?php echo isset($baseFunctions->rep['errors']['email'])?$baseFunctions->rep['errors']['email']:''; ?>" id="confirmation-email" name="confirmation-email" value="<?php echo isset($baseFunctions->rep['email'])?$baseFunctions->rep['email']:''; ?>" placeholder="E-mail" required>
							<div class="invalid-feedback">
								Please fill in your email address.
							</div>
						</div>
					</div>

					<div class="form-input submit">
						<input type="hidden" name="source" value="<?php echo $baseFunctions->view; ?>">
						<input type="submit" name="acc_send_confirm_link" class="btn btn-primary w-100" value="Send confirmation email">
					</div>
				</form>
			</div>
		</div>
	</div>

<?php include_once('views/_footer.php') ?>