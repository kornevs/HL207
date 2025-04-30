<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Button Example</title>
</head>
<body>
    <!-- The form sends a POST request when the button is pressed -->
    <form method="POST">
        <button type="submit" name="sayHello">Press Me</button>
    </form>

    <?php
    // Check if the button was pressed
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sayHello'])) {
        echo "<p>HELLO</p>";
    }
    ?>
</body>
</html>
