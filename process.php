<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $education = htmlspecialchars($_POST['education']);

    echo "<div style='
        font-family: Poppins, Arial, sans-serif; 
        margin: 20px auto; 
        padding: 25px; 
        max-width: 500px; 
        background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fbc2eb); 
        border: none; 
        border-radius: 12px; 
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        text-align: center; 
        color: #333;'>";
    echo "<h2 style='
        font-size: 24px; 
        color: #444; 
        margin-bottom: 20px; 
        text-transform: uppercase; 
        border-bottom: 2px solid #fbc2eb; 
        padding-bottom: 10px;'>Registration Details</h2>";
    echo "<p style='font-size: 16px; margin: 10px 0;'><strong>Name:</strong> $name</p>";
    echo "<p style='font-size: 16px; margin: 10px 0;'><strong>Email:</strong> $email</p>";
    echo "<p style='font-size: 16px; margin: 10px 0;'><strong>Phone:</strong> $phone</p>";
    echo "<p style='font-size: 16px; margin: 10px 0;'><strong>Date of Birth:</strong> $dob</p>";
    echo "<p style='font-size: 16px; margin: 10px 0;'><strong>Education:</strong> $education</p>";
    echo "</div>";
}
?>
