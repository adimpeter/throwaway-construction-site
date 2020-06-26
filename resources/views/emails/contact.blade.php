<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h5>Subject: {{ $msg_data['subject'] }}</h5>
    <p>From: {{ $msg_data['email'] }}</p>
    <p>Name: {{ $msg_data['name'] ?? '' }}</p>
    <p><strong>Message:</strong>
    <br/>
    {{ $msg_data['msg'] ?? '' }}
    </p>
</body>
</html>