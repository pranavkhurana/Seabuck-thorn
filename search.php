<form action="search-result.php" method="GET">
Repeat Unit Length
<select name="SSRtype">
  <option value="">-choose-</option>
  <option value='p1'>Mononucleotide</option>
  <option value='p2'>Dinucleotide</option>
  <option value='p3'>Trinucleotide</option>
  <option value='p4'>Tetranucleotide</option>
  <option value='p5'>Pentanucleotide</option>
  <option value='p6'>Hexanucleotide</option>
</select>
<br>
Repeat Sequence
<input type="text" name='SSR'>
<br>
Microsatellite Length
<select name="sizeoption">
  <option selected value='='>Equal To</option>
  <option value='<'>Less Than</option>
  <option value='<='>Less Than Or Equal To</option>
  <option value='>'>Greater Than</option>
  <option value='>='>Greater Than Or Equal To</option>
  <option  value='BETWEEN'>Between</option>
</select>
<input type="text" name="size"><br>
<input type="text" name="size2"><br>
<input type="submit" value="search">
</form>