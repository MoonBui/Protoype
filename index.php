<?php
include("connectDB.php");

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // validate if email is empty
    if (empty($username)) {
        $error .= '<p class="error">Please enter user name.</p>';
    }

    // validate if password is empty
    if (empty($password)) {
        $error .= '<p class="error">Please enter your password.</p>';
    }

    // Authenticate user
    if (empty($error)) {
        if($query = $conn->prepare("SELECT * FROM User WHERE UserName = ?")) {
            $query->bind_param('s', $username);
            $query->execute();
            $result = $query->get_result(); // get the result set
            $rows = array(); // initialize an empty array
            while ($row = $result->fetch_assoc()) { // loop through the result set and fetch each row as an associative array
                $rows[] = $row; // add the row to the array
            }
            if (count($rows) > 0) {
                $valid_password = false;
                foreach ($rows as $row) {
                    // DB password needs to be hashed in the future
                    // if (password_verify($password, $row['Password'])) 
                    if ($password === $row['Password']) {
                        if ($row['UserType'] === 'Dentist') {
                            // Redirect the user to the correct page for Dentist
                            header("location: doctor.html");
                        } else {
                            // Redirect the user to the correct page for other types of users
                            print('Have not coded this part yet hehe');
                        }
                        // Make session.php 
                        $_SESSION["userid"] = $row['UserID'];
                        $_SESSION["user"] = $row;
                        $valid_password = true;
                        exit;
                    }
                }
                if (!$valid_password) {
                    $error .= '<p class="error" role="alert">The password is not valid.</p>';
                }
            } else {
                $error .= '<p class="error" role="alert">No user exists with that username.</p>';
            }
        } else {
            $error .= '<p class="error" role="alert">Database error: ' . $conn->error . '</p>';
        }
        $query->close();
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" class="login-background">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?version=0.0.4" type="text/css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Prototype</title>
</head>

<body>
    <div class="flex-container login-screen">
        <div>
            <div class="login-form">
                <h1>Login</h1>
                <?php echo $error; ?>
                <form id="loginForm" method="post">
                    <div class="input-icons input">
                        <label for="username">Username</label><br>
                        <!-- <i class="material-symbols-outlined icon">account_circle</i> -->
                        <input type="text" name="username" id="username" placeholder="Enter your username" required><br>
                    </div>
                    <div class="input-icons input">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required><br>
                    </div>
                    <div class="button">
                        <!-- <button onclick="submitLogin()">Login</button> -->
                        <input type="submit" name="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</body>

</html>
