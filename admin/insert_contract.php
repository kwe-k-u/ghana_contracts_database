<section id="insert_contract_section" class='dashboard_content' style="display: none;">
	<form class="row g-3">
		<h3>Contract Details</h3>

		<div class="col-12">
			<label for="inputAddress" class="form-label">Project Name</label>
			<input type="text" class="form-control" id="project_name" placeholder="Cool Project to build dams for farmers">
		</div>
		<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">Project Description</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		<div class="col-md-4">
			<label for="inputState" class="form-label">Region</label>
			<select id="inputState" class="form-select">
				<option selected>Choose...</option>
				<option>...</option>
			</select>
		</div>
		<div class="col-md-4">
			<label for="inputState" class="form-label">Institution</label>
			<select id="inputState" class="form-select">
				<option selected>Please select...</option>
				<option>...</option>
			</select>
		</div>
		<div class="col-md-2">
			<label for="inputZip" class="form-label">Budget</label>
			<input type="number" min="0" class="form-control" id="inputZip">
		</div>
		<div class="col-md-2">
			<label for="inputZip" class="form-label">Start Date</label>
			<input type="date" class="form-control" id="inputZip">
		</div>



		<div class="col-md-2">
			<label for="inputZip" class="form-label">Expenditure</label>
			<input type="number" class="form-control" id="inputZip">
		</div>
		<div class="col-md-2">
			<label for="inputZip" class="form-label">End Date</label>
			<input type="date" class="form-control" id="inputZip">
		</div>


		<div class="col-md-4">
			<label for="inputState" class="form-label">Status</label>
			<select id="inputState" class="form-select">
				<option selected>Please select...</option>
				<option>Proposed</option>
				<option>Pending parliament</option>
				<option>Parliamentary review</option>
				<option>Approved</option>
				<option>In progress</option>
				<option>Stalling</option>
				<option>Abandoned</option>
				<option>Complete</option>
			</select>
		</div>


		<div class="col-md-2">
			<label for="inputZip" class="form-label">Projected End date</label>
			<input type="date" class="form-control" id="inputZip">
		</div>




		<h3>Contractor</h3>
		<div class="col-md-6">
			<label for="inputZip" class="form-label">Contractor Name</label>
			<input type="name" min="0" class="form-control" id="inputZip">
		</div>
		<div class="col-md-5">
			<label for="inputZip" class="form-label">Contractor Account</label>
			<input type="number" class="form-control" id="inputZip">
		</div>
		<p>Contractor is not in the database? <a href="insert_contractor.php" target="_blank" rel="noopener noreferrer">Add them</a></p>



		<div class="col-12">
			<button type="submit" class="btn btn-primary">Insert</button>
		</div>
	</form>
</section>