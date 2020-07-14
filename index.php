<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="?page=Create">Create (C)</a>
        <a class="nav-item nav-link" href="?page=Read">Read (R), Update (U), Delete (D)</a>
        <a class="nav-item nav-link" href="?page=Testing"><b>Test</b></a>
      </div>
    </div>
    </nav>

    <div class="container">
      <?php
      if(isset($_GET['page']))
        {
                  	$page = $_GET['page'];
                  	switch ($page)
                    {
                  		case 'Testing':
                  			include "page/test.php";
                  			break;
                  		case 'Penilaian':
                  			include "page/penilaian.php";
                  			break;
                  		case 'Create':
                  			include "page/create.php";
                  			break;
                  		case 'Read':
                  			include "page/read.php";
                  			break;
                  		case 'Update':
                  			include "page/update.php";
                  			break;
                  		case 'Delete':
                  			include "page/delete.php";
                  			break;
                  		default:
                  			echo "<center><h1>Halaman tidak di temukan !</h1></center>"; break;
                      }
            }
        else
            {
              include "dashboard.php";
            }
        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
