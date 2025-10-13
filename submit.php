<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $address = htmlspecialchars($_POST['address'] ?? '');
    $course = htmlspecialchars($_POST['course'] ?? '');
    $dob = htmlspecialchars($_POST['dob'] ?? '');
    $gender = htmlspecialchars($_POST['gender'] ?? 'Not specified');
    $confirmed = isset($_POST['confirm']) ? 'Yes' : 'No';

    echo "<h3>Form Submitted Successfully!</h3>";
    echo "<p><strong>Full Name:</strong> $fullname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Confirmed:</strong> $confirmed</p>";
} else {
    echo "<p style='color:red;'>Invalid request method.</p>";
}
?>
