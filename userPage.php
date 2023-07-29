<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <div>
        <?php
        session_start();
        if (isset($_SESSION['userEmail'])) {
            $userEmail = $_SESSION['userEmail'];
            echo "$userEmail";
        } else {
            // Redirect the user to the login page if not logged in
            header("Location: userLogin.php");
            exit();
        }
        ?>
    </div>
</body>
</html>