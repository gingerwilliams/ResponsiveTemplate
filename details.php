<!DOCTYPE html>
<html>
  
<head>
  <title>Template A</title>
  <link href="css/main.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <meta content="">
</head>
<body>
	<div id="page" class="details">
		<?php include 'inc/header.php'; ?>

		<div id="slider">
      <img src="images/sample-prop-photos.jpg"
		</div>
		<div id="page-bar">
      <h1>Hesperial Falls<span>Las Vegas, NV 89119</span></h1>
    </div>

		<div id="content">
      <div id="main-page">
        <?php include 'details/plans.php'; ?>

        <div class="description module">
          <h2 class="grey-b">Description</h2>
          <p class="white-b">Welcome home to Cambridge on Devonshire. Our extraordinary location places you minutes from 405, 101 and the 118! Yet our intimate community is hidden away from the noise and congestion of major roads. You will love being close to fine dining, numerous shopping, and popular entertainment. Cambridge on Devonshire will treat you to the fabulous lifestyle you deserve! We feature studios, one and two bedroom floor plans designed with your comfort and convenience in mind! Spectacular amenities include gourmet kitchens with Corian counter tops, elegant plush interiors in soft muted colors, paneled doors throughout and European cabinetry. Contemporary window coverings, crown molding, generous closet and storage solutions are just a few of the added bonuses in your new home! Two sparkling pools, spa, a fitness center and beautiful sculptured landscaping throughout are delightful ways to rest and rejuvenate after a long day of work! You'll love the friendly and attentive staff!</p>
        </div>

        <?php include 'details/tabs.php'; ?>
      </div>
      
      <div id="sidebar">
        <?php include 'details/lead-form.php'; ?>

        <div class="directions side-module">
          <h2>General Directions:</h2>
          <div class="map-canvas"></div>
          <p>From the 118 Freeway, exit at Reseda. Head south on Reseda to Devonshire and turn left. Look for us on the left. Exit the 405 at Devonshire. Head west on Devonshire and look for us on the right.</p>
        </div>

        <div class="hours side-module">
          <h2 >Office Hours:</h2>
          <table>
            <tr>
              <th>Day</th>
              <th>Time</th>
            </tr>
            <tr>
              <td>Sunday</td>
              <td>10:00 AM - 3:00PM</td>
            </tr>
            <tr>
              <td>Monday</td>
              <td>10:00 AM - 6:00PM</td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td>10:00 AM - 6:00PM</td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td>10:00 AM - 6:00PM</td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td>10:00 AM - 6:00PM</td>
            </tr>
            <tr>
              <td>Friday</td>
              <td>10:00 AM - 6:00PM</td>
            </tr>
            <tr>
              <td>Saturday</td>
              <td>10:00 AM - 6:00PM</td>
            </tr>
          </table>
        </div>




      </div><!-- side bar end -->

    </div>
    
    <?php include 'inc/footer.php'; ?>
	</div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/ui.js"></script>
  <script src="js/form.js"></script>
</body>
</html>