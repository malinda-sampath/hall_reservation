<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <p>Your Name :- {{ $user->name }}</p>
    <p>Your Email :- {{ $user->email }}</p>
    <p>Subject :- {{ $user->subject }}</p>
    <p>Leave a message here :- {{ $user->message }}</p>
</body>
</html>