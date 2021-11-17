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
								<input type="text" class="form-control" placeholder="First name" aria-label="First name">
							</div>
							<div class="col">
								<label>End Year</label>
								<input type="text" class="form-control" placeholder="First name" aria-label="First name">
							</div>
						</div>

					</div>

					<div class="d-grid gap-2 d-md-flex justify-content-md-end">
						<button class="btn btn-primary me-md-2" type="reset">Clear All</button>
						<button class="btn btn-primary" type="submit">Search </button>
					</div>
				</div>


			</div>
		</form>
	</div>




	<div class="d-grid gap-2 d-md-flex justify-content-md-end pb-2">
		<button class="btn btn-primary me-md-2" type="button">Download CSV</button>
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
				<th scope="col">STATUS</th>
				<th scope="col">PROJECT NAME</th>
				<th scope="col">CONSTRUCTOR NAME</th>
				<th scope="col">START DATE</th>
				<th scope="col">EXPECTED COMPLETION DATE</th>
				<th scope="col">BUDGET</th>
				<th scope="col">CURRENT EXPENDITURE</th>
				<th scope="col">CURRENT EXPENDITURE</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Mark</td>
				<td>Otto</td>
				<td>Otto</td>
				<td>Otto</td>
				<td>Otto</td>
				<td>Otto</td>
				<td>Otto</td>
				<td>Otto</td>
			</tr>
		</tbody>
	</table>

</section>