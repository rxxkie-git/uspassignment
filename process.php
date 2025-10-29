<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    if (empty($fullName) || empty($email) || empty($phone) || empty($dob) || empty($gender)) {
        echo "All fields are required!";
        exit;
    }

    echo "<strong>Full Name:</strong> $fullName <br>";
    echo "<strong>Email:</strong> $email <br>";
    echo "<strong>Phone Number:</strong> $phone <br>";
    echo "<strong>Date of Birth:</strong> $dob <br>";
    echo "<strong>Gender:</strong> $gender <br>";
} else {
    echo "Invalid request method.";
}
?>
