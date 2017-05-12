<?php
	session_start();
	require("connect.inc.php");
	@$pageid=$_POST["pageid"];
	@$unigeneid=$_POST["unigeneid"];
	if(empty($unigeneid)) die("Input a valid Unigene id.");
	$sql='SELECT * from `table4` WHERE "Seq ID" = '.$unigeneid;
	$_SESSION["query"]=$sql;
	$_SESSION["countquery"]='SELECT count(seqid) from `table4` WHERE "Seq ID" = '.$unigeneid;
	header("Location: search-primer-result.php");
 ?>
