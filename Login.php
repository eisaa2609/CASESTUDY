<?php
include ('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnLogin"])) {
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    //database query
    $sql = "SELECT * FROM user_login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    //Check if query executed successfully
    if (!$result) {
        // Error handling for query execution
        echo "Error: " . mysqli_error($con);
        exit();
    }

    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $role = $row['roles'];

        if ($role == 'officer') {
                header("Location: main_page_officer.php");
                exit();
        } elseif ($role == 'candidate') {
                header("Location: candidate_main.php");
                exit();
        } 
    } else {
        // Invalid username or password
        echo '<script>alert("Invalid username or password");</script>';
    }
    
}    
?>


<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Representative Council Nomination</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: powderblue;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 170px;
        }
        h1 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        button {
            background-color: dodgerblue;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Representative Council Nomination</h1>
        <form method="post">
            <div>
                <label for="Username">Username:</label>
                <input type="text" id="Username" name="Username" required>
            </div>
            <div>
                <label for="Password">Password:</label>
                <input type="password" id="Password" name="Password" required>
            </div>
            <div>
                <button type="submit" name="btnLogin">Login</button>
            </div>
        </form>
    </div>
</body>
</html>

