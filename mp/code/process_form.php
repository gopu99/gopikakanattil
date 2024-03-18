<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    // Replace with your email address
    $to = "drloboacademy@gmail.com";
    $subject = "New Form Submission";
    $message = "Name: $name\nPhone: $phone\nEmail: $email";

    // Send the email
    $success = mail($to, $subject, $message);

    if ($success) {
        // Return a JSON response indicating success
        echo json_encode(["success" => true]);
    } else {
        // Return a JSON response indicating failure
        echo json_encode(["success" => false]);
    }
} else {
    // Invalid request method
    http_response_code(405);
    echo "Method Not Allowed";
}
?>

