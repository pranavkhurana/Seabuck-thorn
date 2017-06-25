
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search | Gene Ontology</title>
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
        <center><h2>Perform your Gene Ontology search here</h2></center>
        <hr>
      <form action="search-go-intermediate.php" method="POST">
        <input type="hidden" name="pageid" value="1">
        <div class="form-group">
          <label for="go">Gene ontology</label>
          <select  name="go" class="form-control" id="go" required="required">
            <option value="">-choose-</option>
            <option value='C GO'>Cellular component</option>
            <option value='F GO'>Molecular Function</option>
            <option value='P GO'>Biological Process</option>
          </select>
        </div>
        <hr>
        <p><small>Choose from the given Gene Ontologies to perform a valid search.</small></p>
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