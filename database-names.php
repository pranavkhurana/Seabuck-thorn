<?php
	$program=$_GET["program"];
	if($program=="blastp"){
?>

		<center><h2>Run</h2></center>
		<form action="blast-result.php" method="POST">
			<input type="hidden" name="program" value="blastp">
			Select Database<select name="database">
				<option value="tdp">nr/nt</option>
				<option value="tdp">tdp</option>
				<option value="tdp">tdp</option>
				<option value="tdp">tdp</option>
			</select>
			<br>
			Query<br>
			<input type="text" name="query"><br>
			<input type="submit" value="Blast">
		</form>
		<center><a href="blast.php"><button>go back</button></a></center>

<?php
	}
	else if($program="blastn"){
?>
   	<center><h2>Select Database</h2></center>
     	


<?php
	}
	else if($program="blastx"){
?>
	<center><h2>Select Database</h2></center>
 
    	


<?php
	}
	else if($program="tblastn"){
?>
	<center><h2>Select Database</h2></center>
 
    	
<?php
	}
?>