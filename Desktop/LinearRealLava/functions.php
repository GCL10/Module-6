<?php
include "db/connection.php";

// Function to process the registration
function processRegistration($username, $email) {
  global $conn;

  $username = mysqli_real_escape_string($conn, $username);
  $email = mysqli_real_escape_string($conn, $email);

  $query = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

  if ($conn->query($query) === TRUE) {
    return "Registration successful!";
  } else {
    return "Error: " . $conn->error;
  }
}

// Function to fetch the product list
function getProducts() {
  global $conn;

  $query = "SELECT * FROM products";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    $products = array();
    while ($row = $result->fetch_assoc()) {
      $products[] = $row;
    }
    return $products;
  } else {
    return null;
  }
}
?>
