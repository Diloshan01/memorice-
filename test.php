<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Form</title>
</head>
<body>
    <h2>Simple PHP Form Example</h2>

    <?php
    // Initialize variables
    $name = "";

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $name = $_POST['name'];

        // Display submitted data
        echo "<p>Hello, $name!</p>";
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Enter your name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
