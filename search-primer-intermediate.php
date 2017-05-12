<?php
	session_start();
	require("connect.inc.php");
	@$pageid=$_POST["pageid"];
	@$unigeneid=$_POST["unigeneid"];
	if(empty($unigeneid)) die("Input a valid Unigene id.");
	$sql='SELECT * from table3 WHERE Unigeneid LIKE "%'.$go.'%"';
	echo $sql;
	$_SESSION["query"]=$sql;
	$_SESSION["countquery"]='SELECT count(seqid) from table2 WHERE go LIKE "%'.$go.'%"';
	header("Location: search-go-result.php");
 ?>