<?php

require 'partials/header.php';

require 'partials/mobile-nav.php';

require 'partials/desktop-nav.php';

?>
<section class="categories">
	<div class="container">
		<h3 class="my-5 text-center">Register new account.</h3>
		<div class="row justify-content-center">
			<div class="col-lg-6 py-5">

				<form action="" method="post">

					<div class="mb-3">
						<label class="form-label">First Name</label>
						<input type="text" class="form-control" name="firstname">

					</div>
					<div class="mb-3">
						<label class="form-label">last Name</label>
						<input type="text" class="form-control" name="lastname">
					</div>

					<div class="mb-3">
						<label class="form-label">Email address</label>
						<input type="email" class="form-control" name="email">
					</div>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<div class="mb-3">
						<label class="form-label">Confirm Password</label>
						<input type="password" class="form-control" name="passwordConfirm">
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>

			</div>
		</div>
	</div>
</section>

<?php
require 'partials/footer.php';
