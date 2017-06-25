<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search | Primers</title>
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
        <center><h2>Primer search </h2></center>
        <hr>
      <form action="search-primer-intermediate.php" method="POST">
        <input type="hidden" name="pageid" value="1" >
        <div class="form-group">
          <label for="go">Search Primers for amplification of SSR loci </label>
          <input type="text"  name="unigeneid" class="form-control" id="unigeneid" required="required" placeholder="Enter UnigeneId e.g. Unigene61">
         </div>
        <hr>
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