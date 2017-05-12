<?php
	session_start();
	require("connect.inc.php");
	@$pageid=$_POST["pageid"];
	@$go=$_POST["go"];
	if(empty($go)) die("Choose at least one Gene Ontology to search for.");
	$sql='SELECT * from table2 WHERE go LIKE "%'.$go.'%"';
	echo $sql;
	$_SESSION["query"]=$sql;
	$_SESSION["countquery"]='SELECT count(seqid) from table2 WHERE go LIKE "%'.$go.'%"';
	header("Location: search-go-result.php");
 ?>