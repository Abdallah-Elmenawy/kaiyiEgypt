<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Drive Booking Request</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            padding: 40px;
        }

        .container {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        p {
            font-size: 16px;
            margin: 10px 0;
        }

        strong {
            color: #34495e;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Message From Contact Us </h2>
        <p><strong>Full Name:</strong> {{ $bookingData['name'] }}</p>
        <p><strong>Email:</strong> {{ $bookingData['email'] }}</p>
        <p><strong>Subject:</strong> {{ $bookingData['subject'] }}</p>
        <p><strong>Message:</strong> {{ $bookingData['message'] }}</p>

    </div>
</body>

</html>
