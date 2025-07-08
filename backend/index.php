<?php
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    $stmt = $conn->prepare("INSERT INTO users (name) VALUES (?)");
    $stmt->bind_param("s", $name);

    if ($stmt->execute()) {
        echo "Thank you, $name!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
