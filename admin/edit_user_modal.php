<!-- Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="row g-3">


					<div class="col-md-6">
						<label for="inputEmail4" class="form-label">First Name</label>
						<input type="text" class="form-control" id="first_name" name="first_name">
					</div>
					<div class="col-md-6">
						<label for="inputPassword4" class="form-label">Last Name</label>
						<input type="text" class="form-control" id="last_name" name="last_name">
					</div>
					<label for="inputEmail4" class="form-label">Email</label>
					<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="col-md-6">
				<label for="inputPassword4" class="form-label">Supervisor Name</label>
				<input type="text" class="form-control" id="supervisor_name" name="supervisor_name">
			</div>
			<div class="col-12">
				<label for="inputAddress" class="form-label">Password</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>
			<div class="col-12">
				<label for="inputAddress2" class="form-label">Office Address</label>
				<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
			</div>
			<div class="col-md-6">
				<label for="inputCity" class="form-label">City</label>
				<input type="text" class="form-control" id="inputCity">
			</div>
			<div class="col-md-2">
				<label for="inputZip" class="form-label">Zip</label>
				<input type="text" class="form-control" id="inputZip">
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-success">Create User</button>
			</div>
			</form>
		</div>
	</div>
</div>