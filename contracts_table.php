
<!-- table button and form  -->
<section id="table_actions_section">
	<div id="form_div">
		<form action="" method="get">
			<div class="row justify-content-center pb-4">

				<div class="row g-3">

					<!-- left side  -->
					<div class="col">
						<label>Project Name</label>
						<input type="text" class="form-control" aria-label="Last name">

						<label>Contractor</label>
						<input type="text" class="form-control"  aria-label="Last name">

						<div class="row">
							<div class="col">
								<label>Expenditure</label>
								<input type="number" class="form-control" placeholder="GHC" aria-label="Last name">
							</div>
							<div class="col">
								<label>Budget</label>
								<input type="number" class="form-control" placeholder="GHC" aria-label="Last name">
							</div>
						</div>
					</div>


					<!-- right side  -->
					<div class="col">
						<label>Index</label>
						<input type="text" class="form-control" placeholder="GHA000">


						<!-- ministry drop down  -->
						<label>Ministry</label><br>
						<div class="btn-group">
							<button class="btn btn-secondary btn-lg" type="button">
								Selected Ministry
							</button>
							<button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
								<span class="visually-hidden">Toggle Dropdown</span>
							</button>

							<ul class="dropdown-menu" id="ministry-drop-down-list">
								<?php
								require_once "constants.php";
								foreach (MINISTRY_LIST as  $ministry) {
									echo "<li><a class=\"dropdown-item\" href=\"#\"> $ministry</a></li>";
								} ?>
							</ul>
						</div><br>



						<div class="row">
							<div class="col">
								<label>Start Year</label>
								<input type="year" class="form-control" aria-label="Start year">
							</div>
							<div class="col">
								<label>End Year</label>
								<input type="date" class="form-control" aria-label="year">
							</div>
						</div>

					</div>

					<div class="d-grid gap-2 d-md-flex justify-content-md-end">
						<button class="btn btn-warning me-md-2" type="reset">Clear All</button>
						<button class="btn btn-primary" type="submit">Search </button>
					</div>
				</div>


			</div>
		</form>
	</div>




	<div class="d-grid gap-2 d-md-flex justify-content-md-end pb-2">
		<button class="btn btn-success me-md-2" type="button">Download CSV</button>
		<button class="btn btn-primary" type="button">Search</button>
	</div>

</section>







<!-- table  -->
<section id="table_section">

	<table class="table table-hover table-bordered fixed-head">
		<caption>List of All contracts</caption>
		<thead>
			<tr>
				<th scope="col">INDEX</th>
				<th scope="col">PROJECT NAME</th>
				<th scope="col">DESCRIPTION</th>
				<th scope="col">CONSTRUCTOR NAME</th>
				<th scope="col">REGION </th>
				<th scope="col">START DATE</th>
				<th scope="col">EXPECTED COMPLETION DATE</th>
				<th scope="col">COMPLETION DATE</th>
				<th scope="col">BUDGET</th>
				<th scope="col">STATUS</th>
			</tr>
		<tbody>
		</thead>
		<?php
			// Getting all projects and displaying them

			
			$contracts = get_all_projects_with_contractors_status();



			foreach ($contracts as $index => $contract){

		?>
			<tr>
				<th scope="row"><?php echo $index +1 ?></th>
				<td><?php echo $contract["project_name"] ?></td>
				<td><?php echo $contract["project_description"] ?></td>
				<td><?php echo $contract["contractor_name"] ?></td>
				<td><?php echo $contract["project_region"] ?></td>
				<td><?php echo $contract["project_startdate"] ?></td>
				<td><?php echo $contract["project_expected_endate"] ?></td>
				<td><?php echo $contract["project_enddate"] ?? "-" ?></td>
				<td><?php echo $contract["project_budget"] ?></td>
				<td><?php echo $contract["status"] ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</section>