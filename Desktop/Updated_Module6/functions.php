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

// Function to add a product
function addProduct($productName, $productPrice) {
  global $conn;

  $productName = mysqli_real_escape_string($conn, $productName);
  $productPrice = mysqli_real_escape_string($conn, $productPrice);

  $query = "INSERT INTO products (name, price) VALUES ('$productName', '$productPrice')";

  if ($conn->query($query) === TRUE) {
    return "Product added successfully!";
  } else {
    return "Error: " . $conn->error;
  }
}

// Function to edit a product
function editProduct($productId, $newName, $newPrice) {
  global $conn;

  $newName = mysqli_real_escape_string($conn, $newName);
  $newPrice = mysqli_real_escape_string($conn, $newPrice);

  $query = "UPDATE products SET name='$newName', price='$newPrice' WHERE id='$productId'";

  if ($conn->query($query) === TRUE) {
    return "Product updated successfully!";
  } else {
    return "Error: " . $conn->error;
  }
}

// Function to delete a product
function deleteProduct($productId) {
  global $conn;

  $query = "DELETE FROM products WHERE id='$productId'";

  if ($conn->query($query) === TRUE) {
    return "Product deleted successfully!";
  } else {
    return "Error: " . $conn->error;
  }
}
?>
