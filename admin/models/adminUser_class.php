<?php

require_once dirname( __FILE__ ) . '/' . '../../backend/db_class.php';


class AdminUser extends Connection{
	function get_all_users(){
		return $this->fetch("SELECT * FROM users;");
	}
}




?>