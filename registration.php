<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $gender = $_POST['gender'];

    echo "
    <div style='font-family:Arial; margin:40px auto; width:400px; padding:20px; border:2px solid #4CAF50; border-radius:10px; background:#f2fff2;'>
        <h2 style='text-align:center; color:#4CAF50;'>Registration Successful!</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Gender:</strong> $gender</p>
        <a href='registration.php' style='display:block; text-align:center; margin-top:20px; text-decoration:none; color:white; background:#4CAF50; padding:10px; border-radius:5px;'>Back to Form</a>
    </div>
    ";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registration Form</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
    body { font-family: Arial; background:#e3f2fd; }
    .form-container {
        width: 350px;
        background: white;
        margin: 80px auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    label { font-weight: bold; }
    input, select {
        width: 100%; padding: 8px; margin: 8px 0;
        border: 1px solid #ccc; border-radius: 5px;
    }
    button {
        background: #007bff; color: white;
        padding: 10px; width: 100%;
        border: none; border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    button:hover { background: #0056b3; }
</style>

<script>
$(document).ready(function(){
    $("#regForm").submit(function(){
        let name = $("#name").val();
        let email = $("#email").val();
        let phone = $("#phone").val();

        if(name=="" || email=="" || phone==""){
            alert("All fields are required!");
            return false;
        }
        return true;
    });
});
</script>
</head>

<body>

<div class="form-container">
    <h2 style="text-align:center; color:#007bff;">Registration Form</h2>

    <form id="regForm" method="POST" action="registration.php">
        <label>Full Name:</label>
        <input type="text" name="name" id="name">

        <label>Email:</label>
        <input type="email" name="email" id="email">

        <label>Phone:</label>
        <input type="text" name="phone" id="phone">

        <label>Gender:</label>
        <select name="gender">
            <option value="">Select</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
