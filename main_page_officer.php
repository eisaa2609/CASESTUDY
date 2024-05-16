<!DOCTYPE html>

<head>
    
    <title>Main Page Officer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: powderblue;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Officer Page</h1>
        <p>Click the button below to access the list of submitted candidate nomination form:</p>
        <a href="officer_list.php" class="btn">List of Submitted Candidate</a>
    </div>
</body>
</html>
