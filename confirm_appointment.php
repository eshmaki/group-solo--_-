<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $patient_name = $_POST['patient_name'] ?? '';
    $doctor_name = $_POST['doctor_name'] ?? '';
    $department_name = $_POST['department_name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $symptoms = $_POST['symptoms'] ?? '';
    $appointment_date = $_POST['appointment_date'] ?? '';

    $confirmation_message = "Your appointment has been successfully booked!";
} else {
    header("Location: index.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
</head>
<body>
    <div class="container">
        <h2>Appointment Confirmation</h2>
        <p><strong><?php echo $confirmation_message; ?></strong></p>
        <h3>Your Submitted Information:</h3>
        <ul>
            <li><strong>Patient Name:</strong> <?php echo $patient_name; ?></li>
            <li><strong>Doctor's Name:</strong> <?php echo $doctor_name; ?></li>
            <li><strong>Department:</strong> <?php echo $department_name; ?></li>
            <li><strong>Phone Number:</strong> <?php echo $phone; ?></li>
            <li><strong>Symptoms:</strong> <?php echo $symptoms; ?></li>
            <li><strong>Appointment Date:</strong> <?php echo $appointment_date; ?></li>
        </ul>
    </div>
</body>
</html>
<style>
body {
    background-color: #fff; 
    color: #00c6a9;
    font-family: Arial, sans-serif;
    text-align: center; 
    font-size: 29px; 
    padding: 50px 0;
}

.container {
    width: 80%;
    margin: 0 auto;
}

h2 {
    font-size: 42px; 
}

ul {
    list-style: none;
    padding: 0;
}

li {
    padding: 10px 0;
}

strong {
    font-weight: bold;
}
</style>

