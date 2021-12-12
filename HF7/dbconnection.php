<?php

$conn = new mysqli("localhost", "root", "", "fakestore");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}