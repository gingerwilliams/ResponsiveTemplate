<!DOCTYPE html>
<html>
  
<head>
  <title>Template A</title>
  <link href="css/main.css" rel="stylesheet" type="text/css">
  <meta content="">
</head>
<body>
	<div id="page">
		<?php include 'inc/header.php'; ?>
    
		
		<div id="slider">
      <div class="refine_your_search" ></div>
      <img src="images/sample-slider-img.jpg">
    </div>
		<div id="page-bar">
      <!-- <div class="">
        <span>Display</span>
        <select>
            <option>10 per page</option>
            <option>15 per page</option>
            <option>20 per page</option>
            <option>25 per page</option>
        </select>
      </div> -->

      <div class="">
        <span>Sort By</span>
        <select>
            <option>Relevence</option>
            <option>Distance</option>
            <option>Price (Ascending)</option>
            <option>Price (Descending)</option>
        </select>
      </div>

    </div>

    <div id="content">

    		<ul class="listings">

          <?php include 'listings/listing.php'; ?>

          <?php include 'listings/listing.php'; ?>

          <?php include 'listings/listing.php'; ?>

          <?php include 'listings/listing.php'; ?>

          <?php include 'listings/listing.php'; ?>

        <ul>
    </div>

		<?php include 'inc/footer.php'; ?>
	</div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/ui.js"></script>
  <script>
  $(".ellipsis").ellipsis();
  </script>
</body>
</html>