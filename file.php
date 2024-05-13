<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    // Query the database
    $sql = "SELECT * FROM user_login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
     
        if ($username == 'officer1' && $password == 'officer123') {
            header("Location: officer.php");
            exit();
        } elseif ($username == 'candidate1' && $password == 'candidate123') {
            header("Location: main page candidate.php");
            exit();
        }
    }

    // Invalid username or password
    echo '<script>alert("Invalid username or password");</script>';
}
?>


<html>
<body style="background-color:powderblue;">
<head><title>PBU</title></head>
<center>
    <h1>Student Representative Council Nomination</h1>
    
    <form method="post">
        <table>
            <tr>
                <td colspan="2"><h3>--------Log in here--------</h3></td>
            </tr>
            <tr> 
                <td><label for="Username">Username:</label></td>
                <td><input type="text" id="Username" name="Username"></td>
            </tr>
            <tr> 
                <td><label for="Password">Password:</label></td>
                <td><input type="password" id="Password" name="Password"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="btnLogin">Login</button></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
