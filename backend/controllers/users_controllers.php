<?php
require_once dirname( __FILE__ ) . '/' . '../users_class.php';

	function sign_up($first_name, $last_name, $password, $email, $city, $office_address, $zip, $creation_date, $status){
		$user = new Users();

		$result = $user->create_user($first_name, $last_name, $password, $email, $city, $office_address, $zip, $creation_date, $status);
	echo "<pre>";
	var_dump($result);
	echo "</pre>";
	return $result;

	}


	function sign_in ($username, $password){
		
	}


	function request_account ($first_name, $last_name, $gov_email, $sup_name, $office_address, $city, $zip, $password){
		$user = new Users();

		$result =  $user->request_account($first_name, $last_name, $gov_email, $sup_name, $office_address, $city, $zip, $password);
		return $result;

	}


	function request_password_reset($last_name, $gov_email, $sup_name, $office_address, $city, $zip, $password){
		$user = new Users();
		$result = $user->request_password_reset($last_name, $gov_email, $sup_name, $office_address, $city, $zip, $password);
		return $result;
	}
?>