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
        <h1><span class="price">$<?php echo $listing["price"]; ?></span> <?php echo $listing["name"]; ?> </h1>
      </div>

    </div>

  </div>

<?php include("inc/footer.php"); ?>
