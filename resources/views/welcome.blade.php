<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        .card {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Welcome</h1>

        <!-- Add a link to navigate to the login page -->
        <p><a href="{{ route('login') }}">Login</a></p>

        <!-- Add a link to navigate to the registration page -->
        <p><a href="{{ route('register') }}">Register</a></p>
    </div>
</body>
</html>