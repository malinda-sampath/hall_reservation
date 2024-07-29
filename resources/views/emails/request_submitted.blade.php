<!DOCTYPE html>
<html>
<head>
    <title>Request Submitted</title>
</head>
<body>
    <h1>New Request Submitted</h1>
    <p>Request ID: {{ $requestId }}</p>
    <p>Name: {{ $requestModel->name }}</p>
    <p>Email: {{ $requestModel->email }}</p>
    <p>Subject: {{ $requestModel->subject }}</p>
    <p>Message: {{ $requestModel->message }}</p>
</body>
</html>
