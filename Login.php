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
                header("Location: main_page_candidate.php");
                exit();
        } 
    } else {
        // Invalid username or password
        echo '<script>alert("Invalid username or password");</script>';
    }
    
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
