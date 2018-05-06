<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);


	// connect to the database
	global $db, $debugMode;

	$debugMode = true;


	// if we're in production...
	if(getcwd() == "/home/robkshar/jobquery.org" || getcwd() == "/home/robkshar/m.jobquery.org" ) {

		$server = "localhost";
		$user 	= "robkshar_mtnbun";
		$pw 	= "b@xt3r";
		$db 	= "robkshar_jobquery";

		$db = new mysqli($server, $user, $pw, $db);
	}


	// run this locally...
	else {
		$db = new mysqli("localhost", "root", "root", "baxter_jobquery");	
	}



	/////////////////////////////////////////////////////////////////////////////


	// DEFINE BASIC DATA HANDLING OPERATIONS


	function get_list($sql){
		global $db;
		$result = $db -> query($sql);
		$list = array();
		if($result){
			while($list[] = $result -> fetch_object());
			unset($list[count($list) -1]);
		} 
		return $list;
	}


	function loadHomepageData(){

		// fetch employers
		$sqle = 'SELECT * FROM employers';
		$employers = get_list($sqle);


		// fetch bussiness employers
		$sqlbe = 'SELECT * FROM employers
					WHERE business = "Yes"';
		$businessemployers = get_list($sqlbe);


		// fetch sponsored employers
		$sqlse = 'SELECT * FROM employers
					WHERE employerSponsor = "Yes"
					ORDER BY employerId DESC
					LIMIT 1';
		$sponsoredEmployer = get_list($sqlse);


		// fetch jobs

		$sqlj = 'SELECT * FROM jobs, employers
					WHERE jobs.employerId = employers.employerId 
					ORDER BY jobId DESC';

		$jobs = get_list($sqlj);


		// fetch sponsored jobs
		$sqlsj = 'SELECT * FROM jobs, employers
					WHERE jobs.employerId = employers.employerId
	 				AND jobSponsor = "Yes"
	 				ORDER BY jobId DESC
					LIMIT 1';

		$sponsoredJob = get_list($sqlsj);


		return array(
			"employers" => $employers,
			"businessemployers" => $businessemployers,
			"sponsoredEmployer" => $sponsoredEmployer,
			"jobs" => $jobs,
			"sponsoredJob" => $sponsoredJob
		);
	}


	function get_employer_data($employerId){

		// fetch employer
		$sqle = 'SELECT * FROM employers WHERE employerId = ' . $employerId;
		$employer = get_list($sqle);


		// fetch jobs
		$sqlj = 'SELECT * FROM jobs  WHERE employerId = ' . $employerId;
		$jobs = get_list($sqlj);

		return array(
			"employer" => $employer,
			"jobs" => $jobs
		);
	}

