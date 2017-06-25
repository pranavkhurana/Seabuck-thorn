<!DOCTYPE html>
<html lang="en">
<head>
  <title>title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://getbootstrap.com.vn/examples/equal-height-columns/equal-height-columns.css" />
  <link rel="stylesheet" type="text/css" href="resources/css/custom-home.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  $(function(){
    $("form").submit(function(){
      $(this).after("<img style='background-color:rgba(255, 255, 255, 0.88);position:fixed;left:0px;top:0px;width:100%;height:100%;z-index:9999' src='resources/images/pageLoader.gif' alt='loading' />").fadeIn();
    });
  });
  </script>
  <script>
  var request;
  function showDatabases(program){

    var url="database-names.php?program="+program;
    if(window.XMLHttpRequest){
      request=new XMLHttpRequest();
    }
    else if(window.ActiveXObject){
      request=new ActiveXObject("Microsoft.XMLHTTP");
    }
    try{
      request.onreadystatechange=getInfo;
      request.open("GET",url,true);
      request.send();
    }catch(e){alert("Unable to connect to server");}
  }

  function getInfo(){
    if(request.readyState==4){
      var val=request.responseText;
      document.getElementById('program').innerHTML=val;
    }
  }

  </script>
  <style media="screen">
  form label{
    padding-top: 10px !important;
  }
  </style>
</head>

<body>
  <?php include("navbar.inc.php") ?>
  <!-- page body container-->
  <div class="container">
    <center><h2>Perform a BLAST search here</h2></center>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3" id="program" >

        <form action="blast-result.php" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label class="col-sm-3" for="program">Program:</label>
            <div class="col-sm-9">
              <p class="form-control-static" id="program">Blastn</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3" for="db">Database:</label>
            <div class="col-sm-9">
              <p class="form-control-static" id="db">Nucleotide Collection (nr/nt)</p>
            </div>
          </div>
          <div class="form-group">
            <label for="query">Enter FASTA Sequence:</label>
            <textarea name="query" class="form-control" rows="5" id="query"></textarea>
          </div>
          <div class="form-group">
            <label for="path">or browse a FASTA sequence from your computer:</label>
            <input type="file" name="query_path">
          </div>
          <button style="float:right;margin-right:20px;" type="submit" class="btn btn-default">Submit</button>
        </form>

      </div>
    </div>
    <!-- end-row -->
  </div>
  <!-- end container -->
</body>
</html>
