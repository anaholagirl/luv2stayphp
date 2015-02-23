<?php include("inc/listings.php"); ?>
<?php
$pageTitle = "All Rental Listings";
include("inc/header.php");
?>

  <div class="RentalList">

    <div class="wrapper">

      <h1>Complete Rental List</h1>

      <ul class="listings">

        <?php foreach($listings as $listing_id => $listing) {
          echo list_rentals_html($listing_id, $listing);
          }
        ?>
      </ul>

    </div>

  </div>

<?php include("inc/footer.php"); ?>
