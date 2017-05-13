<?php
	session_start();
	require("connect.inc.php");
	@$pageid=$_POST["pageid"];
	@$unigeneid=$_POST["unigeneid"];
	if(empty($unigeneid)) die("Input a valid Unigene id.");
	$sql='SELECT * from `table4` WHERE `SeqID` = "'.$unigeneid.'"';
	$_SESSION["query"]=$sql;
	$_SESSION["countquery"]= 'SELECT count(SeqID) from table4 WHERE SeqID = "'.$unigeneid.'"';
	header("Location: search-primer-result.php");
 ?>
