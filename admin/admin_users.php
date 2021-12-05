<section id="users_section" class="col-9 dashboard_content">


	<!-- table actions  -->
	<section>
	</section>

	<!-- Use table  -->
	<h3>Users</h3>
	<table class="table table-stripped sortable searchable">
		<thead>
			<tr>
				<th scope="col">Index</th>
				<th scope="col">First Name</th>
				<th scope="col">Last Name</th>
				<th scope="col">Email</th>
				<th scope="col">City</th>
				<th scope="col">Office Address</th>
				<th scope="col">Zip</th>
				<th scope="col">Creation Date</th>
				<th scope="col">Reset Password</th>
				<th scope="col">Delete user</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Kweku</td>
				<td>Acquaye</td>
				<td>kwekuaacquaye@gmail.com</td>
				<td>Accra</td>
				<td>Trantra hill, WES 229</td>
				<td>00233</td>
				<td>12/21/2021</td>
				<td><button class="btn btn-warning">Reset Password</button></td>
				<td><button  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger">Delete </button></td>
			</tr>
		</tbody>
	</table>
<?php require_once("delete_user_modal.php") ?>
</section>