<?php

include 'config.php';


//get all data from database

$name = $_POST['name'] ?? '';
$father_name = $_POST['father_name'] ?? '';
$mother_name = $_POST['mother_name'] ?? '';
$address = $_POST['address'] ?? '';
$educational_status = $_POST['educational_status'] ?? '';
$phone_number = $_POST['phone_number'] ?? '';
$university_name = $_POST['university_name'] ?? '';
$preferable_subject = $_POST['preferable_subject'] ?? '';
$passing_year = $_POST['passing_year'] ?? '';
// Fetch data from the database
?>