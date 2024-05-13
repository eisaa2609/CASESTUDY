<html><body style="background-color:powderblue;">
    <head><title>PBU</title></head>

    <center>
    <h1>Student Representative Council Nomination</h1>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["Username"]) && isset($_POST["Password"])) {
        $username = $_POST["Username"];
        $password = $_POST["Password"];

        // Defina username and password for officer and candidate
        $officer_username = "officer";
        $officer_password = "officer123";
        $candidate_username = "candidate";
        $candidate_pasword = "candidate123";

        // Check if entered valid username and password for officer 
        if ($username === $officer_username && $password === $officer_password) {
            header("Location: officer.php");
            exit();
        } 
        // Check if entered valid username and password for student 
        elseif ($username === $candidate_username && $password === $candidate_pasword) {
            header("Location: candidate.php");
            exit();
        } else {
            echo '<script>alert("Invalid username or password");</script>';
        }
    }
}
?>

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
            <td colspan="2"><button type="submit" name="btnCandidate">Login</button></td>
        </tr>
    </table>
</form>


</center>
</body>
</html>