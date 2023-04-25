<?php

$conn = new mysqli("localhost", "root", "", "test_db");

// Check if the like button was clicked
if (isset($_POST["action"]) && $_POST["action"] == "like") {
    // Increment the like count in the database or wherever you're storing it
    $like_count = $_POST['Like']; // Retrieve the current like count from the database
    $like_count++;
    // Update the like count in the database
    // ...

    // Return the new like count to the JavaScript code
    echo $like_count;
}

?>