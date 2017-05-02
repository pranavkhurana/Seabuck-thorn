<?php 
	include("simple_html_dom.php");
	$html= file_get_html("http://www.ncbi.nlm.nih.gov/BLAST/Blast.cgi?ALIGNMENT_VIEW=Tabular&DATABASE=refseq_rna&EXPECT=10&FILTER=L&FORMAT_OBJECT=Alignment&MASK_CHAR=0&MASK_COLOR=0&MEGABLAST=true&NCBI_GI=true&NEW_VIEW=true&PROGRAM=blastn&QUERY=F12345%0D%0AM12345%0D%0AAF123456&SHOW_LINKOUT=true&SHOW_OVERVIEW=true&WORD_SIZE=28&CMD=Put");
	//$html = file_get_html('https://blast.ncbi.nlm.nih.gov/Blast.cgi?CMD=Put&QUERY=SSWWAHVEMGPPDPILGVTEAYKRDTNSKK&PROGRAM=blastp&FILTER=L&DATABASE=nr&FORMAT_TYPE=XML');
	$x="string";
	foreach($html->find('comment') as $e){
		$x=$x.$e->outertext;
	}
	preg_match("/RID = [A-Z0-9]*/", $x,$ridstr);
	preg_match("/\s[[:alnum:]]+/",$ridstr[0],$rid);
	$rid=trim($rid["0"]);
	preg_match("/RTOE = [A-Z0-9]*/", $x,$rtoestr);
	preg_match("/\d[A-Z0-9]*/",$rtoestr["0"],$rtoe);
    $rtoeFinal=trim($rtoe["0"]);
 	//echo $rtoeFinal;
    //$url="https://www.ncbi.nlm.nih.gov/BLAST/Blast.cgi?RID=".$ridFinal."&FORMAT_TYPE=XML&ALIGNMENTS=100&DESCRIPTION=100&CMD=Get";
    //$url="http://www.ncbi.nlm.nih.gov/blast/Blast.cgi?CMD=Get&RID=".$ridFinal."&FORMAT_OBJECT=Alignment&ALIGNMENT_VIEW=Pairwise&FORMAT_TYPE=Text&DESCRIPTIONS=10&ALIGNMENTS=5&SHOW_OVERVIEW=yes";
 	$url="https://blast.ncbi.nlm.nih.gov/Blast.cgi?CMD=Get&RID=".$rid."&SHOW_OVERVIEW=on&FORMAT_TYPE=Html";
 	
?>
<iframe style src=<?=$url?>></iframe>