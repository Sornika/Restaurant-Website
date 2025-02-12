<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // Check if the email or username already exists
    $checkQuery = "SELECT * FROM login WHERE email = '$email' OR username = '$username'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo '<script>
                alert("Username or Email already exists!");
                window.location.href = "register.html";
              </script>';
    } else {
        // Insert new user (timestamp is handled automatically)
        $sql = "INSERT INTO login (email, username, password) VALUES ('$email', '$username', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>
                    alert("Registration successful! You can now login.");
                    window.location.href = "index.php";
                  </script>';
        } else {
            echo '<script>
                    alert("Error occurred during registration.");
                    window.location.href = "register.html";
                  </script>';
        }
    }
}
?>
