<!DOCTYPE html>
<html lang="en">
<head>
  <title>Seabuck Thorn | DB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://getbootstrap.com.vn/examples/equal-height-columns/equal-height-columns.css" />
  <link rel="stylesheet" type="text/css" href="resources/css/custom-home.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">

</style>
<body>
<?php include("navbar.inc.php") ?>
<!-- page body container-->
<b>Primer pair</b>-the number of primers formed. Maximum 10 reverse and forward primers are displayed.<br>
<b>Unigene ID</b>-ID of the unigene for which search has been conducted.<br>
<b>Orientation</b>-whether the primer is forward oriented or reverse oriented.<br>
<b>Primer Sequence, 5'->3'</b>-The sequence of the selected primer, always 5'->3' so the right primer is on the opposite strand from the one supplied in the source input.<br>
<b>Start</b>- The position of the 5' base of the primer. For a forward Primer this position is the position of the leftmost base. For a reverse primer it is the position of the rightmost base.<br>
<b>Length</b>- standard criteria of 20-25 bp length of primer has been set. Few primers have length less than 20.<br>
<b>Tm(°C)</b>- Optimum melting temperature of the amplicon. Standard has been set 50-60°C with a maximum difference of 5°C between forward and reverse primers.<br>
<b>GC%</b>- optimum G and C content in that particular primer. Standard 40-60% has been used for designing primers.<br>
<b>Any Self Complementarity</b>-The self-complementarity score of the primer (taken as a measure of its tendency to anneal to itself or form secondary structure).<br>
<b>3' (Self Complementarity)</b>-The 3' self-complementarity of the primer (taken as a measure of its tendency to form a primer-dimer with itself).<br>
<b>Product size</b>- size of the PCR product. Standard range of product size used is 200-500 with 250 as optimum.<br>
<b>Pair any complementarity</b>- it is the score of the complementarity of the both reverse and forward primer (measure of the tendency of both the primers to anneal with each other).<br>
<b>Pair 3’ Complementarity</b> – it is the measure of tendency to for primer-dimer by forward and reverse primer.
<br>
<b>Motif</b>- Microsatellite present in that unigene sequence.<br>
<b>Motif Length</b>- number of times motif is being repeated.<br>
<b>VAR score</b>- score giving information about the polymorphism of microsatellite present in the population.<br>

<b>Cellular Component</b>

These terms describe a component of a cell that is part of a larger object, such as an anatomical structure (e.g. rough endoplasmic reticulum or nucleus) or a gene product group (e.g. ribosome, proteasome or a protein dimer).<br>

<b>Biological Process</b>

A biological process term describes a series of events accomplished by one or more organized assemblies of molecular functions. Examples of broad biological process terms are "cellular physiological process" or "signal transduction". Examples of more specific terms are "pyrimidine metabolic process" or "alpha-glucoside transport". The general rule to assist in distinguishing between a biological process and a molecular function is that a process must have more than one distinct steps.

A biological process is not equivalent to a pathway. At present, the GO does not try to represent the dynamics or dependencies that would be required to fully describe a pathway.<br>

<b>Molecular Function</b>

Molecular function terms describes activities that occur at the molecular level, such as "catalytic activity" or "binding activity". GO molecular function terms represent activities rather than the entities (molecules or complexes) that perform the actions, and do not specify where, when, or in what context the action takes place. Molecular functions generally correspond to activities that can be performed by individual gene products, but some activities are performed by assembled complexes of gene products. Examples of broad functional terms are "catalytic activity" and "transporter activity"; examples of narrower functional terms are "adenylate cyclase activity" or "Toll receptor binding".<br>

</body>
</html>
