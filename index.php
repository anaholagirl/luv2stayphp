<?php
$pageTitle="Places You Love To Stay";
include("inc/header.php");
?>
<body>
<div class="container">

  <div class="Section-Banner">

    <div class="wrapper">

      <embed src="img/boat.mp4.mp4" width="100%" height="300" controller="false" autoplay="true", muted="true", loop="true" class="mainvideo">

      <h1>Welcome to Luv2Stay</h1>
      <h2>Your Home Away From Home</h2>

    </div>

  </div>

  <div class="featured-rental">

    <div class="wrapper">

      <h2>Feature Rental: </h2>

      <?php include("inc/listings.php"); ?>

        <ul class="listings">
          <?php

            $total_listings = count($listings);
            $position = 0;
            $list_view_html = "";
            foreach($listings as $listing_id => $listing) {
              $position = $position + 1;
              if ($total_listings - $position < 1) {
                $list_view_html = list_rentals_html($listing_id, $listing) . $list_view_html;
              }
            }
            echo $list_view_html;
          ?>
        </ul>

    </div>

  </div>

</div>
</body>

<?php
include("inc/footer.php");
?>
