<!DOCTYPE html>
<html>
<head>
    <title>Booking Details</title>
</head>
<body>
    <h1>Booking Details</h1>
    <p>Hi,</p>
    <p>You have received a new Booking:</p>
    <ul>
        <li>Name: {{ $name }}</li>
        <li>Phone: {{ $phone }}</li>
        <li>Email: {{ $email }}</li>
    </ul>
    <p>Booking Dates:</p>
    <ul>
        <li>From Date: {{ $from_date }}</li>
        <li>To Date: {{ $to_date }}</li>
    </ul>
    <p>Thank you,</p>
    <p>Your Team</p>
</body>
</html>