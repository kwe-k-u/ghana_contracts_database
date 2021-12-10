<?php
require_once dirname(__FILE__) ."/../models/admin_class.php";

	function get_all_users(){
		$user = new Admin();
		return $user->get_all_users();
	}

	function get_all_contracts(){
		$admin = new Admin();
		return $admin->get_all_contracts();
	}

	function get_account_requests(){
		$admin = new Admin();
		return $admin->get_account_requests();
	}

	function get_password_requests(){
		$admin = new Admin();
		return $admin->get_password_requests();
	}

	function get_transactions(){
		$admin = new Admin();
		return $admin->get_transactions();
	}


	function sign_up($first_name, $last_name, $password, $email, $city, $office_address, $zip, $creation_date, $status){
		$user = new Admin();
		$encPassword = password_hash($password, PASSWORD_DEFAULT);
		$result = $user->create_user($first_name, $last_name, $encPassword, $email, $city, $office_address, $zip, $creation_date, $status);
		return $result;
	}


	function sign_in($username, $password){
		$admin = new Admin();
		$email_res = $admin->search_user_by_email($username);

		$email_res_password = $email_res["password"];
		if (password_verify($password, $email_res_password)){
			return $email_res;
		}



	}

	function get_contract_statistics(){
		$admin = new Admin();
		$json = [];
		$contracts = $admin->get_all_contracts();
		$json["pending_count"] = 0;
		$json["ongoing_count"] = 0;
		$json["abandoned_count"] = 0;
		$json["complete_count"] = 0;
		//count each status occurrance
		foreach ($contracts as $c){
			switch($c["status"]){
				case "in progress":
					$json["ongoing_count"] ++;
					break;
				case "pending parliament":
					$json["pending_count"] ++;
					break;
				case "complete":
					$json["complete_count"] ++;
					break;
				case "abandoned":
					$json["abandoned_count"] ++;
					break;
			}
		}

		return $json;

	}


	function get_report_stats(){
		$json = [];
		$json["unaddressed_password_count"] = 0;
		$json["unaddressed_account_count"] = 0;
		$json["unaddressed_count"] =0;

		$admin = new Admin();
		$resultsA = $admin->get_account_requests();
		$resultsP = $admin->get_password_requests();


		//account request count
		foreach( $resultsA as $r){
			switch($r['status']){
				case "pending":
					$json["unaddressed_account_count"]++;
					$json["unaddressed_count"] ++;
					break;
				}

			}

			//password request count
			foreach( $resultsP as $r){
				switch($r['status']){
					case "pending":
						$json["unaddressed_password_count"]++;
						$json["unaddressed_count"] ++;
					break;
			}
		}
		return $json;
	}

	function get_account_stats(){
		$admin = new Admin();
		$results = $admin->get_all_users();
		$json = [];
		$json["active_count"] = 0;
		$json["deleted_count"] = 0;
		$json["user_count"] = sizeof($results);

		foreach ($results as $acc){
			switch($acc["status"]){
				case "active":
					$json["active_count"]++;
					break;
				case "deleted":
					$json["deleted_count"]++;
					break;
			}
		}

		return $json;
	}

	function delete_user($id){
		$admin = new Admin();
		$admin->delete_user($id);
	}

	function restore_user($id){
		$admin = new Admin();
		$admin->restore_user($id);
	}

	?>