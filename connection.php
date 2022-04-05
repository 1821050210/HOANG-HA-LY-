<?php

$servername = 'localhost';
$username   = 'root';
$password   = '';
$dbname = 'news';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('<h1>Connection failed!</h1>');
}

