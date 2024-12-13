<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSN Corporation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 1rem 2rem;
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1rem;
        }
        .category {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }
        .card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex: 1 1 calc(50% - 2rem);
            max-width: calc(50% - 2rem);
            padding: 1rem;
            text-align: center;
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }
        .card h2 {
            margin: 1rem 0;
            font-size: 1.5rem;
            color: #007bff;
        }
        .card p {
            font-size: 1rem;
            line-height: 1.5;
        }
        footer {
            text-align: center;
            padding: 1rem;
            background-color: #007bff;
            color: white;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to SSN Corporation</h1>
        <p>Your trusted partner in engineering and construction projects</p>
    </header>

    <div class="container">
        <h2>Our Categories</h2>
        <div class="category">
            <div class="card">
                <img src="{{ asset('uploads/SSN Groups-04.png') }}" alt="SSN Engineers">
                <h2>SSN Engineers</h2>
                <p>Our engineering team is dedicated to delivering innovative and sustainable solutions. From infrastructure to industrial projects, we bring expertise and quality to every venture.</p>
            </div>
            <div class="card">
                <img src="{{ asset('uploads/SSN Groups-03.png') }}" alt="SSN Constructions">
                <h2>SSN Constructions</h2>
                <p>Specializing in large-scale construction projects, we ensure quality, safety, and efficiency in every build. Let us turn your vision into reality.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 SSN Corporation. All Rights Reserved.</p>
    </footer>
</body>
</html>
