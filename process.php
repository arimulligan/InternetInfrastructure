<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags and styles here -->
</head>
<body>
    <!-- PHP content -->
    <?php
    // Check if the request method is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];

        echo "<p>Name: " . $name . "</p>";
        echo "<p>Email: " . $email . "</p>";
    } else {
        echo "<p>No POST data received.</p>";
    }
    ?>
</body>
</html>
