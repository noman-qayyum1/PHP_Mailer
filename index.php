<?php
echo "conect";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email to Customer</title>
</head>
<body>
    <h1>Send Email to Customer</h1>
    <form action="send_email.php" method="post">
        <label for="email">Customer Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Customer Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Send Email">
    </form>
</body>
</html>
