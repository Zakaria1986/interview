<?php include('./php/conjson.php') ?>

<!--******* HTML Document starts here **********-->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
     <!-- detects different screen sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="stylesheet" href="./dist/mycss.css" type="text/css" media="screen">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>3bdigital assesment</title>

  </head>

  <body class="">
  	 <!-- Thats where the log goes -->
  	<header>
      <div class=" header">
        <img src="./images/logo.png" alt="" class="logo" >
      </div>
    </header>
 	<div class="container mt-4 mainbody">

	  	<div class="row">
			<div class='col-lg-8'>
				<div class="row">
				<div class="col-12 articles_heading"><h4>Articles</h4></div>
				</div>
					<div class="row mx-6  d-flex flex-row flex-md-row flex-sm-row ">
						<!--<div class="row col-md-5 mr-md-5 border-top d-flex flex-row p-2" > -->
					    <?php
						foreach($articles as $article){
							echo '<div class="row col-md-5  mx-md-4 d-row  p-1 h-100 w-100 artborder align-self-stretch " >
								       <div class=" col-lg-12 artitle mb h6">'.$article->title.'</div>
								       <img src="'.$article->image.'" class="img-fluid align-self-start"/>
								       <div class=" align-self-start col-lg-12 small mt-3 mb-3 px-3 bodytext"> '
								      .$article->content.'
								      </div>
								      </div>';
							}
							?>
					</div>
			</div>
					<!-- event section starts here -->

			<div class="col-sm-4 bg-light px-5 px-2 ">
					<h3 class="pt-2">Events</h3>
					<?php
						foreach($events as $event){
							echo '<div class="row mr-5  ml-1 mt-3 col-md-12 card mb-sm-4 eventborder">
							<div class="card-body  card-body  style="width:300px"><h6 class="evntTile font-weight-bold">'.$event->title.'</h6>
							    <span class="font-weight-bold">Location:</span> ' .
								  $event->location .'<br>
							    <span class="font-weight-bold">Date:</span> '.
								  $event->date .'</div></div>';
						}
					?>

			</div>
		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>