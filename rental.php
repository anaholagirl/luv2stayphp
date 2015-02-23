<?php include("inc/listings.php");

if (isset($_GET["id"])) {
  $listing_id = $_GET["id"];

  if (isset($listings[$listing_id])) {
    $listing = $listings[$listing_id];
  }
}

if (!isset($listing)) {
  header("Location: rentals.php");
  exit();
}

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

      <div class="rental-details">
        <h1> <?php echo $listing["name"]; ?>:  <span class="price">$<?php echo $listing["price"]; ?> Per Night </span> </h1>
        <h2><span class="location">Rental Location: <?php echo $listing["location"]; ?></span> </h2>
        <h3><span class="bedrooms">Bedrooms: <?php echo $listing["bedrooms"]; ?></span> </h3>
        <h3><span class="baths">Baths: <?php echo $listing["baths"]; ?></span> </h3>
        <h3><span class="sleeps">Sleeps: <?php echo $listing["sleeps"]; ?></span> </h3>
      </div>

    </div>

  </div>

<?php include("inc/footer.php"); ?>
