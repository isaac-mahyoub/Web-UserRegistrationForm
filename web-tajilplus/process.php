<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = trim($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $phone = trim($_POST['phone']);
    $gender = $_POST['gender'];

    $errors = [];
    
    // Validate data
    if (empty($name) || strlen($name) < 3) {
        $errors[] = "Name should be at least 3 characters.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    if (strlen($password) < 8) {
        $errors[] = "Password should be at least 8 characters.";
    }

    if (!preg_match("/^[0-9]{9}$/", $phone)) {
        $errors[] = "Phone number should be 9 digits.";
    }

    if (!in_array($gender, ["Male", "Female"])) {
        $errors[] = "Please selsct a valid gsnder.";
    }

    if (!empty($errors)) {
        echo "<h3>The following errors occurred:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul><a href='form.html'>Go back to the form</a>";
    } else {
        header("Location: dashbord.php?name=" . urldecode($name). "&email=". urldecode($email)."&phone=".urldecode($phone) . "&gender=" . urldecode($gender));
        exit;
    }
}
?>
