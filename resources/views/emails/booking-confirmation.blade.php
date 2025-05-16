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
        <h2>Booking Confirmation Request</h2>
        <p><strong>Full Name:</strong> {{ $bookingData['full_name'] }}</p>
        <p><strong>Phone:</strong> {{ $bookingData['phone'] }}</p>
        <p><strong>Email:</strong> {{ $bookingData['email'] }}</p>
        <p><strong>Location:</strong> {{ $bookingData['location'] }}</p>
        <p><strong>Car Model:</strong> 
            @php
                $car = App\Models\Car::find($bookingData['car_id']);
                $carName = json_decode($car->name, true);
                echo $carName['en']; 
            @endphp
        </p>
        <p><strong>Date:</strong> {{ $bookingData['date'] }}</p>
        <p><strong>Preferred Time:</strong> {{ $bookingData['best_time'] }}</p>
        @if (!empty($bookingData['comment']))
            <p><strong>Additional Info:</strong> {{ $bookingData['comment'] }}</p>
        @endif
    </div>
</body>

</html>
