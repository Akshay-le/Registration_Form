<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $address = htmlspecialchars($_POST['address'] ?? '');
    $age = htmlspecialchars($_POST['age'] ?? '');
    $course = htmlspecialchars($_POST['course'] ?? '');
    $dob = htmlspecialchars($_POST['dob'] ?? '');
    $gender = htmlspecialchars($_POST['gender'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Submitted Details</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #4b79a1, #283e51);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .card {
      background: rgba(255,255,255,0.1);
      backdrop-filter: blur(10px);
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
      width: 400px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    p { margin: 10px 0; }
    span { color: #f5b600; font-weight: 600; }
  </style>
</head>
<body>
  <div class="card">
    <h2>Submitted Details</h2>
    <p><strong>Full Name:</strong> <span><?= $fullname ?></span></p>
    <p><strong>Email:</strong> <span><?= $email ?></span></p>
    <p><strong>Phone:</strong> <span><?= $phone ?></span></p>
    <p><strong>Address:</strong> <span><?= $address ?></span></p>
    <p><strong>Age:</strong> <span><?= $age ?></span></p>
    <p><strong>Course:</strong> <span><?= $course ?></span></p>
    <p><strong>Date of Birth:</strong> <span><?= $dob ?></span></p>
    <p><strong>Gender:</strong> <span><?= $gender ?></span></p>
  </div>
</body>
</html>
<?php
} else {
    echo "Invalid request.";
}
?>
