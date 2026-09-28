<?php

$name = $_POST["employee_name"];
$problem = $_POST["issue_type"];
$description = $_POST["problem_description"];

$connection = mysqli_connect("localhost", "root", "", "it-support");

if (!$connection) {
    die("Database connection failed");
}

$sql = "INSERT INTO support_requests
        (employee_name, issue_type, problem_description)
        VALUES ('$name', '$problem', '$description')";

mysqli_query($connection, $sql);

echo "<h1>Support Request Sent</h1>";
echo "<p>Your request has been saved successfully.</p>";

?>