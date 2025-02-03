<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../../../login-form/login.css"> <!-- External CSS file linked here -->
    <!-- Add Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="/submit_login" method="POST">
            <div class="input-container">
                <i class="fas  fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="input-container">
                <i class="fas fa-lock"></i> 
                <input type="password" name="password" placeholder="Password" required>
            </div>
            
            <button type="submit">Login</button>
        </form>
        
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
        
        <div>
            <p>Not registered?<a href="{{ route('register')}} "> Create an account</a></p>
        </div>
    </div>

</body>
</html>
