<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="../../../register-form/register.css"> <!-- External CSS file linked here -->
</head>
<body>

    <div class="form-container">
        <h2>Sign Up</h2>
        <form action="{{ route('register')}}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="name":value="__('Name')">Full Name</label>
                <input type="text" id="name" name="name" :value="old('name')" required>
            </div>

            <div class="form-group">
                <label for="email" :value="__('Email')">Email Address</label>
                <input type="email" id="email" name="email" :value="old('email')" required>
            </div>

            <div class="form-group">
                <label for="password" :value="__('Password')">Password</label>
                <input type="password" id="password" name="password" :value="old('password')"required>
            </div>


            <div class="form-group1">
                <input type="submit" value="Sign Up">
              </div>
            <div>
                <p>I'm already a member! <a href="{{ route('login')}}">Sign in</a></p>
            </div>
        </form>
    </div>

</body>
</html>
