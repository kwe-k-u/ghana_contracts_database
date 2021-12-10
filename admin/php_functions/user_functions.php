<?php

if (isset($_POST["deleteUser"])){
	delete_user($_POST["deleteIdValue"]);
}

if (isset($_POST["restoreUser"])){
	restore_user($_POST["restoreIdValue"]);
}

if (isset($_POST["create_user"])){
	if (!empty($_POST["uid"])){ //edit action was intiated
		if (!empty($_POST["password"])){ //edit action was intiated
			$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
			change_password($_POST["uid"], $hash);
		}
		update_user($_POST["uid"], $_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["city"], $_POST["address"], $_POST["zip"]);
	} else { //account creation was initiated
		$creation_date = date("Y-m-d");
		$result = sign_up($_POST["first_name"], $_POST["last_name"], $_POST["password"], $_POST["email"],
		$_POST["city"], $_POST["address"], $_POST["zip"], $creation_date, "active");
	}
}
 ?>