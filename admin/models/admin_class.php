<?php

require_once dirname( __FILE__ ) . '/' . '../../backend/db_class.php';


class Admin extends Connection{
	function get_all_users(){
		return $this->fetch("SELECT * FROM users;");
	}

	function get_all_contracts(){
		return $this->fetch("SELECT
		*
		FROM project_contractor
		JOIN projects
		  ON projects.project_id = project_contractor.project_id
		JOIN contractors
		  ON contractors.contractor_id = project_contractor.contractor_id
		 JOIN project_status
		 ON project_status.project_id = projects.project_id;");
	}

	function get_account_requests(){
		return $this->fetch("SELECT * FROM  account_requests");
	}

	function get_password_requests(){
		return $this->fetch("SELECT * FROM  password_requests");
	}

	function get_transactions(){
		return $this->fetch("SELECT * FROM  transactions");
	}

	// function get_account_owner($number){
	// 	return $this->fetchOne("SELECT ");
	// }



	function create_user($first_name, $last_name, $password, $email, $city, $office_address, $zip, $creation_date, $status){
		return $this->query("INSERT INTO users (first_name, last_name, password, email, city, office_address, zip, creation_date, status) "
		."VALUE ('$first_name', '$last_name', '$password', '$email', '$city', '$office_address', '$zip', '$creation_date', '$status');");
	}


	function delete_user($user_id){
		return $this->query("UPDATE users SET status='deleted' where user_id = $user_id;");
	}


	function search_user_by_email($email){
		return $this->fetchOne("SELECT * FROM users WHERE email = '$email'");
	}

}

?>