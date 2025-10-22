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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Submission Successful</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #4b7bec, #1e90ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            text-align: left;
            width: 400px;
            animation: fadeIn 0.6s ease;
        }
        h2 {
            text-align: center;
            color: #2d3436;
            margin-bottom: 15px;
        }
        p {
            font-size: 15px;
            color: #2d3436;
            margin: 8px 0;
        }
        .highlight {
            color: #0984e3;
            font-weight: 600;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>✅ Application Submitted</h2>
        <p><strong>Full Name:</strong> <span class="highlight"><?= $fullname ?></span></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Phone:</strong> <?= $phone ?></p>
        <p><strong>Address:</strong> <?= $address ?></p>
        <p><strong>Course:</strong> <?= $course ?></p>
        <p><strong>Date of Birth:</strong> <?= $dob ?></p>
        <p><strong>Gender:</strong> <?= $gender ?></p>
        <p><strong>Confirmed:</strong> <?= $confirmed ?></p>
    </div>
</body>
</html>
<?php
} else {
    echo "<p style='color:red;'>Invalid request method.</p>";
}
?>
