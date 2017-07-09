 <?php
 	require("connect.inc.php");
	@$unigeneid=$_POST["unigeneid"];
	if(empty($unigeneid)) die("Input a valid Unigene id.");
	$sql='SELECT * from `table5` WHERE `SeqID` = "'.$unigeneid.'"';
	//ADD ALL FIELD NAMES HERE
 	//colnames to fetch
 	$colNames=array("SeqId","unigeneseq");
     //colnames to displays
  $displayColNames=array("Sequence Id", "Sequence");
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
 </head>

 <body>
 <?php include("navbar.inc.php") ?>
 <!-- page body container-->
 <div class="container">
 	 <table class=" table table-hover table-responsive">

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
 </body>
 </html>
