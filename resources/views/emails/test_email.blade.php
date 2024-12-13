<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Site Email Template</title>
    <style>
        /* General reset */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }
        .email-header {
            text-align: center;
            padding: 20px 0;
            background-color: #f2f2f2; /* Change to your brand color */
        }
        .email-header img {
            width: 150px; /* Adjust based on logo size */
            height: auto;
        }
        .email-content {
            padding: 20px;
            text-align: left; /* Align text to start */
        }
        .email-content p {
            font-size: 16px;
            line-height: 1.5;
            margin: 15px 0;
        }
        .button-container {
            text-align: center;
            margin: 20px 0;
        }
        .button {
            background-color: #004080; /* Change to your brand color */
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
        }
        .thank-you {
            padding: 20px;
            text-align: left;
            background-color: #f9f9f9;
            border-top: 1px solid #ddd;
        }
        .thank-you p {
            margin: 0;
        }
    </style>
</head>
<body>
    <!-- Main email container -->
    <div class="email-container">
        <!-- Logo section -->
        <div class="email-header">
            <!-- Replace src with your logo URL -->
            <img src="{{ url('images/SSN Groups-03.png') }}" alt="SSN Groups Logo">
        </div>

        <!-- Email content -->
        <div class="email-content">
            <!-- Subject section -->
            <p><strong>Subject:</strong> <!-- Insert your email subject here --> </p>

            <!-- Letter/message section -->
            <p><!-- Add your main letter content here -->
                Dear {{ $name ?? 'User' }},<br><br>
                We are excited to announce new opportunities in our ongoing construction projects. Explore the latest updates and get involved today!
            </p>

            <!-- Button/Link section -->
            <div class="button-container">
                <a href="https://your-link.com" class="button">Learn More</a>
            </div>
        </div>

        <!-- Thank you message -->
        <div class="thank-you">
            <p>Thank you,<br><strong>SSN Groups</strong></p>
        </div>
    </div>
</body>
</html>
