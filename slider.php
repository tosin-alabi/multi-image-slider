<!DOCTYPE>
<html>
<head>
	<title></title>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
</head>
<body>

<div class="col-md-12">

 <div class="carousel slide multi-image-slider" id="theCarousel">

  <div class="carousel-inner">

   <?php
   $conn = mysqli_connect("localhost","root","","test");

   $sqlQuery = "SELECT id, image FROM tbl_slider LIMIT 4";

   $resultSet = mysqli_query($conn, $sqlQuery);

   $setActive = 0;

   $sliderHtml = '';

   while( $sliderImage = mysqli_fetch_assoc($resultSet)){

    $activeClass = "";

    if(!$setActive) {

     $setActive = 1;

     $activeClass = 'active';

    }

    $sliderHtml.= "<div class='item ".$activeClass."'>";

    $sliderHtml.= "<div class='col-xs-4'><a href='".$sliderImage['id']."'>";

    $sliderHtml.= "<img src='images/".$sliderImage['image']."' class='img-responsive'>";

    $sliderHtml.= "</a></div></div>";

   }

   echo $sliderHtml;

   ?>

  </div>

  <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>

  <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

  </div>

</div>



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src="main.js"></script>
</body>
</html>