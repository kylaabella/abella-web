<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
        }

        /* Live background animation */
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(-45deg, #ff9a9e, #fbc2eb, #c9def4);
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
            z-index: -1;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Welcome content */
        .welcome-container {
            text-align: center;
            color: white;
        }

        h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        p {
            font-size: 1.5rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .button-container {
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            display: inline-block;
        }

        button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.6);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="welcome-container">
        <h1>Welcome to Our Website</h1>
        <p>We are glad to have you here. Enjoy your visit!</p>
        <div class="button-container">
            <a href="{{ route('login')}}">
                <button>Login</button>
            </a>
            <a href="{{ route('register')}}">
                <button>Register</button>
            </a>
        </div>
    </div>
</body>
</html>
