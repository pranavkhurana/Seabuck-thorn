<?php
//make die happen in layout page
//error in case record not found 
	require("connect.inc.php");
	@$ssrtype= $_POST["SSRtype"];
	@$ssr= $_POST["SSR"];
	@$sizeoption=$_POST["sizeoption"];
	@$size=$_POST["size"];
	@$size2=$_POST["size2"];
	//echo $ssrtype." ".$ssr." ".$sizeoption." ".$size;
	if(empty($ssr) AND empty($ssrtype) AND empty($size)) die("Choose at least one attribute to search for.");
	$sql='SELECT * FROM table1 WHERE 1';
	$fields = [	'SSRtype','SSR','size'];		//fields to search
	foreach ($fields as $field) {	//adding each field to where clause
  		if (isset($_POST[$field]) AND !empty($_POST[$field])) {	//check if field is set and filled
	    	$value = $_POST[$field];
	    	if($field=="size")
	    		if($sizeoption!="BETWEEN")
		    		$sql=$sql." AND `".$field."` ".$sizeoption." '".$value."'";
				else if(isset($_POST["size2"]) AND !empty($_POST["size2"]))
		    		$sql=$sql." AND `".$field."` ".$sizeoption." '".$value."' AND '" .$size2."'";
	    		else die('"Between" option needs lower as well as upper bound.');
	    	else	    	
	    		$sql=$sql." AND `".$field."` = '".$value."'";
  		}
	}
	//echo $sql;
	$sql=$sql;//add limit for paging
	$colNameQuery='SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA` ="'.$mysql_db.'" AND `TABLE_NAME`="table1"';
	//fetching column names in colNames array
	if ( $query_run =  mysql_query( $colNameQuery ) ) {
		 $i=0;
	     while ( $query_row=mysql_fetch_assoc ( $query_run ) ) {
	        $colNames[$i] = $query_row['COLUMN_NAME'];$i++;
	    }
	    foreach ($colNames as $key) {
	    	echo $key;
	    }
	    echo "<br>";
	}
	//fetching required data
	if ( $query_run =  mysql_query( $sql) ) {
		while ( $query_row=mysql_fetch_assoc ( $query_run ) ) {
			for($i=0;$i<sizeof($colNames);$i++){
	        	$data[$i] = $query_row[$colNames[$i]];	//fetch data of each row in an array data
	       	}
	       	foreach ($data as $key)
	    		echo $key." ";
	    	echo "<br>";
	    }
	}
	else {
	    echo mysql_error();
	}
 ?>