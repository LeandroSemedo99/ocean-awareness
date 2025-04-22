<?php

// Use environment variables to store sensitive information.
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');
$host = getenv('DB_HOST');

// Establish a secure connection to the database.
$mysqli = new mysqli($host, $user, $password, $dbname);

// Check for connection errors.
if ($mysqli->connect_error) {
    // Log the error to a secure location.
    error_log("Database connection error: " . $mysqli->connect_error);
    die("Internal server error. Please try again later.");
}