<?php
	session_start();
	require("connect.inc.php");
	@$pageid=$_POST["pageid"];
	@$unigeneid=$_POST["unigeneid"];
	if(empty($unigeneid)) die("Input a valid Unigene id.");
	$sql='SELECT * from `table5` WHERE `SeqID` = "'.$unigeneid.'"';
	$_SESSION["query"]=$sql;
	$_SESSION["countquery"]= 'SELECT count(SeqID) from table5 WHERE SeqID = "'.$unigeneid.'"';
	header("Location: search-unigene-result.php");
 ?>
