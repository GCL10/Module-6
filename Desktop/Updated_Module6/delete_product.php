<?php
include "functions.php";

// Get the form data
$productId = $_POST["productId"];

// Call a function to delete the product
$result = deleteProduct($productId);

// Send the response back
echo $result;
?>