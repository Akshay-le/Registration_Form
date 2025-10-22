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
} else {
    echo "<p style='color:red;'>Invalid request method.</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submitted Details</title>
    <style>
        body {
            background: #f0f3f7;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 400px;
            margin: 80px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px gray;
        }
        h2 {
            text-align: center;
            color: #28a745;
        }
        p {
            margin: 10px 0;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background: #007bff;
            padding: 10px;
            border-radius: 4px;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Submitted Successfully!</h2>
        <p><strong>Full Name:</strong> <?= $fullname ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Phone:</strong> <?= $phone ?></p>
        <p><strong>Address:</strong> <?= $address ?></p>
        <p><strong>Course:</strong> <?= $course ?></p>
        <p><strong>Date of Birth:</strong> <?= $dob ?></p>
        <p><strong>Gender:</strong> <?= $gender ?></p>
        <p><strong>Confirmed:</strong> <?= $confirmed ?></p>
        <a href="index.html">← Go Back</a>
    </div>
</body>
</html>
