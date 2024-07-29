
<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
        }
        .container {
            padding: 20px;
        }
        .header, .footer {
            text-align: center;
        }
        .content {
            margin-top: 20px;
        }
        .content h2 {
            margin-bottom: 10px;
        }
        .content p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Form Submission Details</h1>
        </div>
        <div class="content">
            <h2>Request ID: {{ $requestId }}</h2>
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Subject:</strong> {{ $subject }}</p>
            <p><strong>Message:</strong> {{ $message }}</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} University of Ruhuna. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
