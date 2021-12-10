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


?>



