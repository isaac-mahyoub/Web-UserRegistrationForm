<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Dashbord</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome to Your Dashbord</h2>
        <p>You have successfully rigstred. Here, you can view additional information:</p>
        <h3>Your Information:</h3>
        <ul>
            <li><strong>Name</strong> <?php echo htmlspecialchars($_GET['name']); ?></li>
            <li><strong>Email</strong> <?php echo htmlspecialchars($_GET['email']); ?></li>
            <li><strong>Phone</strong> <?php echo htmlspecialchars($_GET['phone']); ?></li>
            <li><strong>Gender</strong> <?php echo htmlspecialchars($_GET['gender']); ?></li>
        </ul>
        <a href="form.html"><button>Back to Home</button></a>
    </div>
</body>
</html>