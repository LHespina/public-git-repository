<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        .card {
            width: 400px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            position: relative;
            display: flex;
            flex-direction: column;
            animation: glow 1s infinite alternate; /* Dark red glow animation every 1 second */
        }
        @keyframes glow {
            0% {
                box-shadow: 0 0 20px rgba(255, 0, 0, 0.5); /* Dark red shadow */
            }
            100% {
                box-shadow: 0 0 30px rgba(255, 0, 0, 1); /* Dark red shadow with higher intensity */
            }
        }
        .form-container {
            flex: 1; /* Make the form container expand to fill available space */
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 10px;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #990000; /* Dark red background color */
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .image-container {
            position: absolute;
            top: 10px;
            right: 10px;
            max-width: 100px;
        }
        .links {
            margin-top: 20px; /* Add margin to the top of the links */
        }
        h1, .links a {
            font-family: Arial, sans-serif; /* Apply the Arial font to h1 and links */
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="image-container">
            <!-- Make the image clickable and link to the homepage -->
            <a href="{{ url('/home') }}">
                <img src="{{ asset('images/Blood Bank Logo.png') }}" alt="Blood Bank Logo" width="100" height="100">
            </a>
        </div>

        <div class="form-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Register</h1>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </div>

                <div class="form-group">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>

        <div class="links">
            <!-- Move the links to the bottom, below the form -->
            <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
            <p><a href="{{ url('/home') }}">Go to Homepage</a></p>
        </div>
    </div>
</body>
</html>
