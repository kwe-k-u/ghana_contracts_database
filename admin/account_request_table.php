
<!-- table  -->
<section id="account_request_table">

<table class="table table-hover table-bordered fixed-head">
	<?php $accounts = get_account_requests(); ?>

	<caption>List of All Requests</caption>
	<h4>Account Requests</h4>
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">First name</th>
			<th scope="col">Last Name</th>
			<th scope="col">Email</th>
			<th scope="col">Supervisor Name </th>
			<th scope="col">Office Address</th>
			<th scope="col">City</th>
			<th scope="col">Zip</th>
			<th scope="col">Status</th>
			<th scope="col">Approve</th>
			<th scope="col">Reject</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($accounts as $request){ ?>
		<tr>
			<th scope="row"><?php echo $request['request_id'] ?></th>
			<td><?php echo $request['first_name'] ?></td>
			<td><?php echo $request['last_name'] ?></td>
			<td><?php echo $request['email'] ?></td>
			<td><?php echo $request['supervisor_name'] ?></td>
			<td><?php echo $request['office_address'] ?></td>
			<td><?php echo $request['city'] ?></td>
			<td><?php echo $request['zip'] ?></td>
			<td><?php echo $request['status'] ?></td>
			<?php
				if ($request["status"] === "pending"){
			?>
			<form action="dashboard.php" method="post">
				<input type="text" name="id" value ='<?php echo $request["request_id"]?>' hidden>
				<td> <button class="btn btn-primary" name="password_reset_approve"> Approve </button></td>
				<td> <button class="btn btn-warning"name="password_reset_reject">Reject </button></td>
			</form>
		</tr>
		<?php } ?>
		<?php } ?>
	</tbody>
</table>

</section>