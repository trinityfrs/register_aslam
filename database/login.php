<?php
include 'config.php';

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit(); // Exit to prevent further execution
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM aslam WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
        exit(); // Exit after redirect
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url("bg.jpeg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .login-container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 20px 25px;
            width: 300px;
            background-color: rgba(0,0,0,.5);
            box-shadow: 0 0 10px rgba(255,255,255,.255);
        }
        
        .login-container h2 {
            margin-top: 0;
            color: white;
        }
        
        .login-container label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }
        
        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 93%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }
        
        .login-container input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 10px 15px;
            cursor: pointer;
            width: 130px;
            margin-right: 10px;
        }
        
        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="index.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" placeholder ="Email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" placeholder ="Password" id="password" name="password" required>
            
            <input type="submit" value="Login">

            <a href="register.php">Belum punya akun?</a>
        </form>
    </div>
</body>
</html>