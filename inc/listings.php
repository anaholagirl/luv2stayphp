<?php

function list_rentals_html($listing_id, $listing) {

  $output = "";

  $output = $output . "<li>";
  $output = $output . '<a href="rental.php?id=' . $listing_id . '">';
  $output = $output . '<img src="' . $listing["img"] . '" alt="' . $listing["name"] . '">';
  $output = $output . "<p>View Details</p>";
  $output = $output . "</a>";
  $output = $output . "</li>";

  return $output;
}

$listings = array();
  $listings[101] = array(
    "location" => "Jackson Hole",
    "name" => "Comfy Cabin",
    "bedrooms" => 2,
    "baths" => 2,
    "sleeps" => 6,
    "img" => "img/comfycabin.jpeg",
    "price" => 175
  );

  $listings[102] = array(
    "location" => "San Diego",
    "name" => "Cool Cabana",
    "bedrooms" => 3,
    "baths" => 2,
    "sleeps" => 10,
    "img" => "img/coolcabana.jpeg",
    "price" => 300
  );

  $listings[103] = array(
    "location" => "Long Beach",
    "name" => "Surf's Up",
    "bedrooms" => 2,
    "baths" => 2,
    "sleeps" => 5,
    "img" => "img/surfsup.jpeg",
    "price" => 250
  );

  $listings[104] = array(
    "location" => "Waikiki",
    "name" => "Peaceful Paradise",
    "bedrooms" => 4,
    "baths" => 2,
    "sleeps" => 12,
    "img" => "img/peacefulparadise.jpeg",
    "price" => 500
  );

?>
