<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Set a background color for better visibility */
        }

        .main-container {
            display: grid;
            gap: 20px;
            padding: 20px;
            max-width: 2000px; /* Adjust the maximum width to your preference */
            width: 100%;
            margin: auto; /* Center the container */
        }

        .card-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            position: relative;
            cursor: pointer;
            animation: glow 1s infinite alternate;
        }

        .card {
            width: 100%;
            height: 150px; /* Set a fixed height for better alignment */
            perspective: 1000px;
        }

        .card-inner {
            width: 100%;
            height: 100%;
            transition: transform 0.5s;
            transform-style: preserve-3d;
        }

        .card:hover .card-inner {
            transform: rotateY(180deg);
        }

        .front, .back {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .back {
            transform: rotateY(180deg);
        }

        .back-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 100%;
        }

        .back-content a {
            padding: 10px;
            color: white;
            text-decoration: none;
            background-color: #007bff;
            border-radius: 5px;
            margin: 5px 0;
        }

        .back-content a:hover {
            background-color: #0056b3;
        }

        .back-content .logout {
            align-self: flex-end;
        }

        @keyframes glow {
            from {
                box-shadow: 0 0 10px 2px red;
            }
            to {
                box-shadow: 0 0 20px 5px red;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="card-container">
            <div class="card">
                <div class="card-inner">
                    <div class="front">
                        <h1>Save A Life Donate A Blood</h1>
                        
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-inner">
                    <div class="front">
                        <h1>Welcome User</h1>
                    </div>
                    <div class="back">
                        <div class="back-content">
                            <h1>Dashboard</h1>
                            <a href="#">Search Donor</a>
                            <a href="#">Donor Registration</a>
                            <a href="#">Blood Bank</a>
                            <a href="#" class="logout">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-inner">
                    <div class="front">
                        <h1>Table</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
