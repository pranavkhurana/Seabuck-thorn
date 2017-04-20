<?php 
	include("simple_html_dom.php");
	$html = file_get_html('https://blast.ncbi.nlm.nih.gov/Blast.cgi?QUERY=u00001&DATABASE=nt&PROGRAM=blastn&CMD=Put');
	$x="string";
	foreach($html->find('comment') as $e){
		$x=$x.$e->outertext;
	}
	preg_match("/RID = [A-Z0-9]*/", $x,$ridstr);
	preg_match("/\d[A-Z0-9]*/",$ridstr["0"],$rid);
    $ridFinal=trim($rid["0"]);
    //echo $ridFinal."<br>";

 	preg_match("/RTOE = [A-Z0-9]*/", $x,$rtoestr);
	preg_match("/\d[A-Z0-9]*/",$rtoestr["0"],$rtoe);
    $rtoeFinal=trim($rtoe["0"]);
 	//echo $rtoeFinal;

 	
 ?>
