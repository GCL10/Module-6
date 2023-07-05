<?php
include "functions.php";

// Fetch and display the product list
$products = getProducts();
if ($products) {
  foreach ($products as $product) {
    echo "Product ID: " . $product["id"] . "<br>";
    echo "Name: " . $product["name"] . "<br>";
    echo "Price: $" . $product["price"] . "<br>";
    echo "Description: " . $product["description"] . "<br><br>";
  }
} else {
  echo "No products found.";
}
?>
