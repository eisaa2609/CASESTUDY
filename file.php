<html><body style="background-color:powderblue;">
    <head><title>PBU</title></head>

    <center>
    <h1>Student Representative Council Nomination</h1>
    
<?php


?>
<form>
    <table>
        <tr>
            <td><label><h3>--------Candidate log in here--------</h3></label></td>
            <td><br></td>
        </tr>
        <tr> 
            <td><label for="Username">Username:</label></td>
        </tr>
        <tr>
            <td><input type="text" id="Username" name="Username"></td>
        </tr>
        <tr> 
            <td><label for="Password">Password:</label></td>
        </tr>
        <tr>
            <td><input type="password" id="Password" name="Password"></td>
        </tr>
        <tr>
            <td><button type="button" name="btnCandidate" onclick="window.location.href='candidate.php'">Register</button></td>
        </tr>
        <tr>
            <td><label><h3>--------Officer log in here--------</h3></label></td>
            <td><br></td>
        </tr>
        <tr>
            <td><button type="button" name="btnOfficer" onclick="window.location.href='officer.php'">Log in</button></td>
        </tr>
    </table>
</form>

</center>
</body>
</html>