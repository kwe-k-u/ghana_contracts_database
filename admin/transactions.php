<section id="transactions_section" class="dashboard_content" style="display: none;">
	<h3>Transactions </h3>

	<table class="table table-stripped sortable searchable">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Sender Name</th>
				<th scope="col">Sender Account</th>
				<th scope="col">Recipient Name</th>
				<th scope="col">Recipient Account</th>
				<th scope="col">Amount</th>
				<th scope="col">Transaction Date</th>
				<th scope="col">Project name</th>
			</tr>
		</thead>

		<tbody>
			<?php
			$transactions = get_transactions();

			foreach ($transactions as $transaction) {
			?>
				<tr>
					<th scope="row"><?php echo $transaction['transaction_id'] ?></th>
					<td>Kojo Akoto</td>
					<td><?php echo obscure($transaction['sender_account']) ?></td>
					<td>Kwame Ato</td>
					<td><?php echo obscure($transaction['recipient_account']) ?></td>
					<td><?php echo formatNumber($transaction['amount']) ?></td>
					<td><?php echo formatDate($transaction['transaction_date']) ?></td>
					<td>Police highway patrol</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>


</section>