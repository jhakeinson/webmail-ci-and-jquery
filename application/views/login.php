<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 vcenter">
			<form method="post" action="<?= base_url('login'); ?>">
				<h2>Login</h2>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" placeholder="jake@example.com" name="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>
