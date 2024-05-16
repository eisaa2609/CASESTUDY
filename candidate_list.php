<?php
include ('connection.php');

//sql query to select data from database
$sql = "SELECT name, regNo, date FROM candidates;";

if(isset($_GET['btnSearch'])) {
    $searchCandidate = $_GET['search-candidate'];

    $sql = "SELECT name, regNo, date FROM candidates WHERE name LIKE '%$searchCandidate%'";
}

$result = mysqli_query($con,$sql);

mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Candidates</title>
    <style>
       body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: powderblue;
            text-align: center;
        }

        h2{
            margin-top: 80px;
        }

        tr:nth-child(even) {
            background-color: #E0F3F5;
        }

        table, tr, th {
            padding: 12px 35px;
            width: 60%;
        }

        input[type=search] {
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 50%;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type=search], input[type=submit] {
            padding: 12px 20px;
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
            margin-top: 250px; 

        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2><b>Candidates List</b></h2>
    <form method="GET">
        <input type='search' id='search-candidate' name='search-candidate' placeholder='Cari Calon'/>
        <input type='submit' value='Cari' id='btnSearch' name='btnSearch'/>
    </form>
    <br><br>
    <table align='center'>
        <tr>
            <th>No. </th>
            <th>Nama Penuh</th>
            <th>Registration No</th>
            <th>Date</th>
        </tr>

        <?php 
            // LOOP TILL END OF DATA
            $i=1;
            while($rows = mysqli_fetch_array($result))
            {
        ?>
        <tr>
            <!-- Get data from each column -->
            <td><?php echo $i;?></td>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['regNo'];?></td>
            <td><?php echo $rows['date'];?></td>
        </tr>
        <?php
            $i++;
            }
        ?>
    </table>
    <div class="container">
        <a href="candidate_save.php" class="btn">BACK</a>
    </div>
</body>
</html>
            