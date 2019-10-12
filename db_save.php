<?php
// include config with database definition
include('config_mysqli.php');
include('serverlogin.php');

// start transaction
sqlQuery('start transaction');

// delete record of the current user
sqlQuery("delete from exercise_plan where userid = '".$_SESSION['userid']."'");

// accept parameters - p is array (suppress errors by adding "@" sign)
$arr = @$_REQUEST['p'];



// if input array exists (in all cases except deleting last element)
if (is_array($arr)) {
	// open loop through each array element
	foreach ($arr as $p) {
        $userid = $_SESSION['userid'];
		// detach values from combined parameters
		// $tbl parameter is ignored because saving goes only from table 1
		list($ex_id, $row, $col) = explode('_', $p);
		// discard clone id part from the sub_id
		$ex_id = substr($ex_id, 0, 2);
		// insert to the database
		sqlQuery("insert into exercise_plan (ex_id, ep_row, ep_col, userid) values ('$ex_id', $row, $col, $userid)");
	}
}

// commit transaction (sqlCommit is function from config.php)
sqlCommit();

// redirection to the exerciseplan.php
header('location: exerciseplan.php');
?>