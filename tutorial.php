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
  <style>
    .data{
        padding: 15px;
        border-radius: 10px;
    }

  </style>
</head>

<body>
<?php include("navbar.inc.php") ?>

<!-- page body container-->

<p><b><strong><font color="red">SBTMicroSatdb</font></strong></b> A Seabuckthorn microsatellite database has following pages </p>

<ul>
<li><b>Home </b> The default page for the database which provides the brief introduction about the database.</li><br>

<li><b>BLAST </b>Provides the simplest way to identify the already existing microsatellite from the sequence of interest</li><br>
<li><b>Search </b>This page helps in mining the microsatellite data from the database.</li><br>
<li><b>Tutorial </b>Gives information and detailed information about “How to use this database”.</li><br>
<li><b>Contact Us</b> This page provides information about database builders.</li><br>
</ul>
<div id="home">
<p><b>Home: </b>This page provided the brief introduction about the database and also SSR statsistics.</p> <br>
<img src="Tutor/Image1.JPG" height="400" width="600"> 
</div>

<div id="BLAST">
<p><b>BLAST: </b>Provides the simplest way to identify the already existing SSR from the sequence of interest</p>

<p>BLAST search was integrated into the database to find the nearest genic and non-genic SSR available for the query sequence identified in the chickpea genome thereby enabling to discover linked SSRs and associated QTL regions.</p>
<img src="Tutor/Image2.JPG" height="400" width="600"> 
<img src="Tutor/Image3.JPG" height="400" width="600"> 
<img src="Tutor/Image4.JPG" height="400" width="600"> 

<p>BLAST results provides the coordinates of homologous region found in the genome; match statistics like, percentage identity, e-value, alignment length; nearest genic and non-genic SSRs and its distance between thr hit and coordinates reported region on the genome.</p>

<div id="search">
<p><b>Search: </b>This page helps the user to mine the microsatellite data and has 4 ptions in dropdown menu.</p>
<img src="Tutor/Image5.JPG" height="400" width="600"> 

<p>The database search includes microsatdb, gene ontology, primers and unigene sequence search options with various parameters to explore for the information.
Microsatdb search will mine the database with any one of the options like type of Repeat unit length, Repeat sequence and based on the length of microsatellite.</p>
<img src="Tutor/image6.JPG" height="400" width="600"> 

<p>On the basis of Repeat unit length it can be-di-,tri-,tetra-,penta-,hexa- and compound.</p>
<img src="Tutor/image6.JPG" height="400" width="600"> 

<p>On the basis of Repeat sequence(motif sequence of interest).</p>
<img src="Tutorial/image7.JPG" height="400" width="600"> 

<p>On the basis of length of microsatellite it has 6 options- equal to, less than,less than or equal to,greater than, greater than or equal to and between.</p>
<img src="Tutorial/image7.JPG" height="400" width="600"> 

<p><b>Gene ontology:</b> it has 2 search parameters. Search can be done on the basis of Unigene ID or terms of gene ontology.</p>
<img src="Tutorial/image7.JPG" height="400" width="600"> 
<p>Enter the id of unigene for which functional assessment has to be done.</p>
<img src="Tutorial/image7.JPG" height="400" width="600"> 
<img src="Tutorial/image7.JPG" height="400" width="600"> 
<p> To know about Cellular component, Molecular function or Biological process. Select any one of the option and search result will show all the unigenes having that gene ontology term. </p>
<img src="Tutorial/image7.JPG" height="400" width="600"> 
<img src="Tutorial/image7.JPG" height="400" width="600"> 
<p><b>Primers:</b>To find primers of any Unigene just enter the Unigene id and submit it. A table will appear having columns for both reverse and forward primers</p>
<p>Unigene ID- displays the ID of the unigene for which search has been conducted.
Orientation- This column defines whether the primer is forward oriented or reverse oriented.
Primer Sequence, 5'->3'-The sequence of the selected primer or oligo, always 5'->3' so the right primer is on the opposite strand from the one supplied in the source input.
Start- The position of the 5' base of the primer. For a forward Primer this position is the position of the leftmost base. For a reverse primer it is the position of the rightmost base.
Length- standard criteria of 20-25 bp length of primer has been set. Only few primers have length less than 20.
Tm(°C)- Optimum melting temperature of the amplicon. Standard has been set 50-60°C with a maximum difference of 5°C between forward and reverse primers.
GC%- optimum G and C content in that particular primer. Standard 40-60% has been used for designing primers.
Any Self Complementarity-The self-complementarity score of the primer (taken as a measure of its tendency to anneal to itself or form secondary structure).
3' (Self Complementarity)-The 3' self-complementarity of the primer (taken as a measure of its tendency to form a primer-dimer with itself).
Product size- size of the PCR product. Standard range of product size used is 200-500 with 250 as optimum.
Pair any complementarity- it is the score of the complementarity of the both reverse and forward primer (measure of the tendency of both the primers to anneal with each other).
Pair 3’ Complementarity – it is the measure of tendency to for primer-dimer by forward and reverse primer.
Motif- Microsatellite present in that unigene sequence.
Motif Length- number of times motif is being repeated.
VAR score- score giving information about the polymorphism of microsatellite present in the population.</p>
<img src="Tutorial/image7.JPG" height="400" width="600"> 
<img src="Tutorial/image7.JPG" height="400" width="600"> 
<p><b> Unigene sequence:</b> enter the Id of unigene for which you want its sequence.</p>
<img src="Tutorial/image7.JPG" height="400" width="600"> 
<img src="Tutorial/image7.JPG" height="400" width="600"> 
</div>
</body>
</html>


