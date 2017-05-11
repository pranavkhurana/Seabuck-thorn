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
<div class="container">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <center><h2>Perform your search here</h2></center>
        <hr>
      <form action="search-mdb-intermediate.php" method="POST">
        <input type="hidden" name="pageid" value="1">
        <div class="form-group">
          <label for="rul">Repeat unit length:</label>
          <select  name="SSRtype" class="form-control" id="rul">
            <option value="">-choose-</option>
            <option value='p1'>Mononucleotide</option>
            <option value='p2'>Dinucleotide</option>
            <option value='p3'>Trinucleotide</option>
            <option value='p4'>Tetranucleotide</option>
            <option value='p5'>Pentanucleotide</option>
            <option value='p6'>Hexanucleotide</option>
          </select>
        </div>
        <div class="form-group">
          <label class="control-label" for="rs">Repeat Sequence:</label>
          <input type="text" name="SSR" class="form-control" id="rs" placeholder="For example: (GT)5">
        </div>
        <div class="form-group">
          <div class="">
            <label for="ml" name="length" class="control-label">Microsattelite length:</label>
          </div>
          <div class="col-sm-4">
            <select class="form-control" id="ml" name="sizeoption">
              <option selected value='='>Equal To</option>
              <option value='<'>Less Than</option>
              <option value='<='>Less Than Or Equal To</option>
              <option value='>'>Greater Than</option>
              <option value='>='>Greater Than Or Equal To</option>
              <option  value='BETWEEN'>Between</option>
            </select>
          </div>
          <div class="col-sm-4">
            <input type="number" name="size" class="form-control">
          </div>
          <div class="col-sm-4">
            <input type="number" name="size2" class="form-control">
          </div>
        </div>
        <hr><hr>
        <p><small>Fill at-least one field to perform a valid search</small></p>
        <div class="form-group"> 
          <div class="col-sm-offset-5 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </form>
      <hr><hr>

    </div>
    <div class="col-sm-3"></div>
  </div><!-- row end-->
</div><!-- container end-->
<hr>
</body>
</html>