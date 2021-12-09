


<!-- Admin capabilities -->

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
	<!-- <link rel="stylesheet" href="styles/admin_index.css" type="text/css"> -->




	<title>GCD Admin</title>


<body>
<section id="insert_contract_section" class='dashboard_content' style="display: block; background-color: #efefef">
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
			<label for="startDate" class="form-label">Start Date</label>
			<input type="date" class="form-control" id="startDate">
		</div>



		<div class="col-md-2">
			<label for="expenditure" class="form-label">Expenditure</label>
			<input type="number" class="form-control" id="expenditure">
		</div>
		<div class="col-md-2">
			<label for="endDate" class="form-label">End Date</label>
			<input type="date" class="form-control" id="endDate">
		</div>


		<div class="col-md-4">
			<label for="status" class="form-label">Status</label>
			<select id="status" class="form-select">
				<option selected>Please select...</option>
				<option>Proposed</option>
			</select>
		</div>


		<div class="col-md-2">
			<label for="expectedEndDate" class="form-label">Projected End date</label>
			<input type="date" class="form-control" id="expectedEndDate">
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
			<!-- redirect to admin dashboard after insert  -->
		</div>
	</form>
</section>
</body>






</html>