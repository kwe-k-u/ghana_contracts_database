<?php

  
	function formatDate($date_str){
		if (!$date_str)
			return "n/a";
		$date = date_create($date_str);
		return date_format($date,"d-M-Y");
	}


	function formatNumber($val){
		return number_format($val,2,"."," ");
	}


	function formatDateForSQL($date_str){
		$date = date_create($date_str);

		return date_format($date,"Y-m-d");
	}

?>