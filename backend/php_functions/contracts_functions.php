<?php
	function getFunctions($GET){
		$query = "";


		// Building custom query based on get parameters
		// region
		if (!empty($GET['region']) && $GET['region'] != "All"){
			$query = $query ." projects.project_region ='". $GET['region'] . "'";
		}

		// contractor name
		if (!empty($GET['contractor_name'])){
			$query = $query ." contractors.contractor_name LIKE '%". $GET['contractor_name'] ."%'";
		}

		// status
		if (!empty($GET['status'])){
			$query = $query ." project_status.status = '". $GET['status'] ."'";
		}

		// ministry
		if (!empty($GET['ministry']) ){
			$query = $query ." instituitions.institution_name = '". $GET['ministry'] ."'";
		}

		// budget
		if ( !empty($GET['budget_to']) || !empty($GET['budget_from']) ){
			if (!empty($GET['budget_to']) && !empty($GET['budget_from']) ){
				$query = $query ." projects.project_budget BETWEEN ". $GET['budget_from'] ." AND " .$GET['budget_to'] ;
			} elseif (!empty($GET['budget_from'] )){
				$query = $query ." projects.project_budget >= ". $GET['budget_from'] ;
			} else {
				$query = $query ." projects.project_budget <= " .$GET['budget_to'] ;
			}
		}

		// expenditure
		if ( !empty($GET['expen_to']) || !empty($GET['expen_from']) ){
			if (!empty($GET['expen_to']) && !empty($GET['expen_from']) ){
				$query = $query ." projects.project_expenditure. BETWEEN ". $GET['expen_from'] ." AND " .$GET['expen_to'] ;
			} elseif (!empty($GET['expen_from'] )){
				$query = $query ." projects.project_expenditure. >= ". $GET['expen_from'] ;
			} else {
				$query = $query ." projects.project_expenditure <= " .$GET['expen_to'] ;
			}
		}

		// dates
		if ( !empty($GET['end_year']) || !empty($GET['start_year']) ){
			if (!empty($GET['end_year']) && !empty($GET['start_year']) ){
				$query = $query ."  projects.project_startdate >= '". formatDateForSQL($GET['start_year']) ."' AND projects.project_enddate <= '" .formatDateForSQL($GET['end_year']) ."' ";
			} elseif (!empty($GET['start_year'] )){
				$query = $query ." projects.project_startdate >= '". formatDateForSQL($GET['start_year']) ."' " ;
			} else {
				$query = $query ." projects.project_enddate <= '" .formatDateForSQL($GET['end_year'])  ."' ";
			}
		}
		echo $query;
		return  get_all_projects_with_contractors_status_by_params($query);
	}



	function download($results){

// Fetch records from database

    $delimiter = ",";
    $filename = "members-data_" . date('Y-m-d') . ".csv";

    // Create a file pointer
    $f = fopen('php://memory', 'w');

    // Set column headers
    $fields = array('ID', 'FIRST NAME', 'LAST NAME', 'EMAIL', 'GENDER', 'COUNTRY', 'CREATED', 'STATUS');
    fputcsv($f, $fields, $delimiter);

    // Output each row of the data, format line as csv and write to file pointer
    while($row = $results){
		echo "<pre>";
		var_dump($row);
		echo "</pre>";
		
	}

	}

	?>