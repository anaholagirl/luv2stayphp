<?php include("inc/listings.php");
  $pageTitle = $listing["name"];
  include("inc/header.php");
?>

  <div class="section-page">

    <div class="wrapper">

      <div class="rental-picture">
        <span>
          <img src="<?php echo $listing["img"]; ?>" alt="<?php echo $listing["name"]; ?>">
        </span>
      </div>

    </div>

  </div>
