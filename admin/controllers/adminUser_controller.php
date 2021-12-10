<?php
require_once dirname(__FILE__) ."/../models/adminUser_class.php";

	function get_all_users(){
		$user = new AdminUser();
		return $user->get_all_users();
	}
?>