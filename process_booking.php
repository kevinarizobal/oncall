<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $services = isset($_POST['services']) ? implode(", ", $_POST['services']) : '';
    $date = $_POST['date'];
    $time = $_POST['time'];

    $stmt = $conn->prepare("INSERT INTO bookings (name, contact, address, description, location, latitude, longitude, services, date, time) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $name, $contact, $address, $description, $location, $latitude, $longitude, $services, $date, $time);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Your booking has been successfully saved!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to save booking. Please try again."]);
    }

    $stmt->close();
    $conn->close();
}
?>
