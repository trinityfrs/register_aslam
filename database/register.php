
<!DOCTYPE html>
<html>
<head>
    <title>Form Register</title>
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
        
        .register-container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 20px 25px;
            width: 300px;
            background-color: rgba(0,0,0,.5);
            box-shadow: 0 0 10px rgba(255,255,255,.255);
        }
        
        .register-container h2 {
            margin-top: 0;
            color: white;
        }
        
        .register-container label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }
        
        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 93%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }
        
        .register-container input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 10px 15px;
            cursor: pointer;
            width: 130px;
            margin-right: 10px;
        }
        
        .register-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="proses_register.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" placeholder ="Username" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" placeholder ="Email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" placeholder ="Password" id="password" name="password" required>
            
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" placeholder ="Confirm Password" id="cpassword" name="cpassword" required>
            
            <input type="submit" name="submit" value="Register">
            <a href="login.php">Sudah punya akun?</a>
        </form>
    </div>
</body>
</html>