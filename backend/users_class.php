<?php

require ('db_class.php');
	class Users extends Connection{


		//returns a list of all the users in the database;
		function get_all_users(){
			return $this->fetch("SELECT * FROM users");
		}

		//returns a list of all delted users in the database;
		function get_deleted_users(){
			return $this->fetch("SELECT * FROM users WHERE status='deleted';");
		}

		//returns a list of all active users in the database;
		function get_active_users(){
			return $this->fetch("SELECT * FROM users WHERE status='active';");
		}


		function create_user($first_name, $last_name, $password, $email, $city, $office_address, $zip, $creation_date, $status){
			return $this->query("INSERT INTO users (first_name, last_name, password, email, city, office_address, zip, creation_date, status) "
			."VALUE ($first_name, $last_name, $password, $email, $city, $office_address, $zip, $creation_date, $status);");
		}


		function delete_user($user_id){
			return $this->query("UPDATE users SET status='deleted' where user_id = $user_id;");
		}

		




	}
?>