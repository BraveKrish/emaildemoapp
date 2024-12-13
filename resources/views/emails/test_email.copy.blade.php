<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Email Verification - SSN Groups</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-container {
            background-color: #ffffff;
            width: 80%;
            max-width: 600px;
            margin: 30px auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #004b8d;
            padding: 20px;
            text-align: center;
        }
        .email-header img {
            width: 120px;
            height: auto;
        }
        .email-body {
            padding: 30px;
            text-align: center;
        }
        .email-body h2 {
            margin-bottom: 20px;
            color: #004b8d;
        }
        .email-body p {
            margin-bottom: 25px;
            font-size: 16px;
            line-height: 1.5;
        }
        .verify-button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #004b8d;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }
        .email-footer {
            padding: 20px;
            background-color: #f0f0f0;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="https://your-logo-url-here.com/logo.png" alt="SSN Groups Logo">
        </div>
        <div class="email-body">
            <h2>Verify Your Email Address</h2>
            <h1>Hello, {{ $name ?? 'User' }}!</h1>
            <p>Thank you for registering with SSN Groups. To complete your registration and activate your account, please verify your email address by clicking the button below:</p>
            {{-- <a href="{{verification_link}}" class="verify-button">Verify Email</a> --}}
        </div>
        <div class="email-footer">
            <p>Thank you,<br><strong>SSN Groups</strong></p>
        </div>
    </div>
</body>
</html>
