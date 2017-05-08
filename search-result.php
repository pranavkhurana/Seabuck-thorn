<?php
//make die happen in layout page
//error in case record not found 
session_start();
	require("connect.inc.php");
	if(isset($_POST["pageid"])&&!empty($_POST["pageid"]))
		@$pageid=$_POST["pageid"];
	else $pageid=1;
	$sql=$_SESSION["query"];
	$countquery=$_SESSION["countquery"];
	//echo $countsql;
	/*@$ssrtype= $_POST["SSRtype"];
	@$ssr= $_POST["SSR"];
	@$sizeoption=$_POST["sizeoption"];
	@$size=$_POST["size"];
	@$size2=$_POST["size2"];*/
	$sql=$sql." LIMIT ".(($pageid-1)*25).",25";//add limit for paging

	//$colNameQuery='SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA` ="'.$mysql_db.'" AND `TABLE_NAME`="table1"';
	//fetching column names in colNames array
	/*if ( $query_run =  mysql_query( $colNameQuery ) ) {
		$i=0;
	    while ( $query_row=mysql_fetch_assoc ( $query_run ) ) {
	        $colNames[$i] = $query_row['COLUMN_NAME'];$i++;
	    }
	 }*/
	//colnames to fetch
	$colNames=array("ID","SSRnr.","SSRtype","SSR","size","start","end");
    //colnames to displays
    $displayColNames=array("UnigeneID","SSRno.","SSRtype","SSR","Size","Start","End");     
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://getbootstrap.com.vn/examples/equal-height-columns/equal-height-columns.css" />
  <link rel="stylesheet" type="text/css" href="resources/css/custom-home.css">
  <link rel="stylesheet" type="text/css" href="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.pagination-container{
  		margin-left: 40%;
  		margin-bottom: 20px;
  		
   	}
  	.pagination-form{
  	}
  	.submit-pagination-button{
  		float: left;
  		border:1px solid rgba(255, 0, 0, 0.3);
  		background-color: rgba(119, 119, 119, 0.12);
  		margin: 3px;
  		padding:10px;
  		border-radius: 5px;
  	}
  </style>
</head>

<body>
<?php include("navbar.inc.php") ?>
<?php
         $retval = mysql_query( $countquery);
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         $row = mysql_fetch_array($retval, MYSQL_NUM );
         $rec_count = $row[0];
         //echo $rec_count;
         
     ?>

<!-- page body container-->
<div class="container">
	<?php if($pageid == floor($rec_count/25+1)){ ?>
		<p class="result"> <?="(".((($pageid-1)*25)+1)."-".((($pageid-1)*25)+($rec_count%25)).") of ".$rec_count." results"?></p>
	<?php }
	else{
	?>
		<p  class="result"><?="(".((($pageid-1)*25)+1)."-".((($pageid-1)*25)+25).") of ".$rec_count." results"?></p>
	<?php	} ?>
	 <table class="table table-hover table-responsive">
    <thead>
      <tr>
	 	<?php 
	 		foreach ($displayColNames as $key) {
		    	echo "<th>".$key."</th>";
		    }
		?>
	  </tr>
	</thead>
    <tbody>
		<?php
		    //fetching required data
		if ( $query_run =  mysql_query( $sql) ) {
			while ( $query_row=mysql_fetch_assoc ( $query_run ) ) {
				for($i=0;$i<sizeof($colNames);$i++){
		        	$data[$i] = $query_row[$colNames[$i]];	//fetch data of each row in an array data
		       	}
		       	echo "<tr>";
		       	foreach ($data as $key)
		    		echo "<td>".$key."</td>";
		    	echo "</tr>";
		    }
		}
		else {
		    echo mysql_error();
		}
		?>
    </tbody>
  </table>
	


 </div>
<!-- end container -->
<hr>

<div class="container-fluid pagination-container">
	<?php 
	function pageidform($page,$disp){
		echo "<div class='pagination-form'><form action='search-result.php' method='post'>";
		echo "<input type='hidden' name='pageid' value=".$page.">";
		echo "<input class='submit-pagination-button' type='submit' value='".$disp."'>";
		echo "</form>";
	}
	pageidform(1,"First");
	if($pageid!=1)
		pageidform($pageid-1,"Prev");
	if($pageid!=floor($rec_count/25+1))
		pageidform($pageid+1,"Next");
	pageidform(floor($rec_count/25+1),"Last");
	//echo $rec_count." page id=".$pageid;
?>
</div>
</body>
</html>