<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
        p {
            margin-bottom: 15px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Appointment</h1>
        <p>You have successfully made a payment for the following item:</p>
        <ul>
            <li><strong>Title:</strong> {{ $item['title'] }}</li>
            <li><strong>Price:</strong> ${{ $item['price'] }}</li>
            <li><strong>Time:</strong> {{ $time }}</li>
        </ul>
        <p>We appreciate your business.</p>
    </div>
    <div class="footer">
        <p>This email was sent by Hair Clean. &copy; 2024 All rights reserved.</p>
    </div>
</body>
</html>
