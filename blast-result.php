<!DOCTYPE html>
<html lang="en">
<head>
  <title>title</title>
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
<?php
// Read and encode the queries from file
$encoded_query = '';
$handle = fopen($_FILES["query_path"]["tmp_name"], 'r');
if ($handle) {
  while (($line = fgets($handle)) !== false) {
    $encoded_query .= urlencode($line);
  }
  fclose($handle);
}
if($encoded_query=='')
  $query=$_POST["query"];
else $query=$encoded_query;
// Build the request

//$data = array('CMD' => 'Put', 'PROGRAM' => 'blastp', 'DATABASE' => 'pdb', 'QUERY' => 'SSWWAHVEMGPPDPILGVTEAYKRDTNSKK');
//$data = array('CMD' => 'Put', 'PROGRAM' => $program, 'DATABASE' => $database, 'QUERY' => $query);

$data = array('CMD' => 'Put', 'PROGRAM' => 'blastn', 'DATABASE' => 'nr', 'QUERY' => $query);
$options = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'POST',
    'content' => http_build_query($data)
  )
);
$context  = stream_context_create($options);
// Get the response from BLAST
$result = file_get_contents("https://blast.ncbi.nlm.nih.gov/blast/Blast.cgi", false, $context);
// Parse out the request ID
preg_match("/^.*RID = .*\$/m", $result, $ridm);
$rid = implode("\n", $ridm);
$rid = preg_replace('/\s+/', '', $rid);
$rid = str_replace("RID=", "", $rid);
// Parse out the estimated time to completion
preg_match("/^.*RTOE = .*\$/m", $result, $rtoem);
$rtoe = implode("\n", $rtoem);
$rtoe = preg_replace('/\s+/', '', $rtoe);
$rtoe = str_replace("RTOE=", "", $rtoe);
// Maximum execution time of webserver (optional)
//ini_set('max_execution_time', $rtoe+60);
// Wait for search to complete
$rtoe=$rtoe+0;
sleep($rtoe);
// Poll for results
while(true) {
  sleep(10);
  $opts = array(
    'http' => array(
      'method' => 'GET'
    )
  );
  $contxt = stream_context_create($opts);
  $reslt = file_get_contents("https://blast.ncbi.nlm.nih.gov/blast/Blast.cgi?CMD=Get&FORMAT_OBJECT=SearchInfo&RID=$rid", false, $contxt);
  if(preg_match('/Status=WAITING/', $reslt)) {
    //print "Searching...\n";
    continue;
  }
  if(preg_match('/Status=FAILED/', $reslt)) {
    print "Search $rid failed, please report to blast-help\@ncbi.nlm.nih.gov.\n";
    exit(4);
  }
  if(preg_match('/Status=UNKNOWN/', $reslt)) {
    print "Search $rid expired.\n";
    exit(3);
  }
  if(preg_match('/Status=READY/', $reslt)) {
    if(preg_match('/ThereAreHits=yes/', $reslt)) {
      //print "Search complete, retrieving results...\n";
      break;
    } else {
      print "No hits found.\n";
      exit(2);
    }
  }
  // If we get here, something unexpected happened.
  exit(5);
} // End poll loop
// Retrieve and display results
$opt = array(
  'http' => array(
    'method' => 'GET'
  )
);
$content = stream_context_create($opt);
$output = file_get_contents("https://blast.ncbi.nlm.nih.gov/blast/Blast.cgi?CMD=Get&FORMAT_TYPE=Text&RID=$rid", false, $content);

include("navbar.inc.php");
echo("<center><h2>Blast Result</h2></center>");
print $output;

?>
</body>
</html>
