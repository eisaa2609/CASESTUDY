<?php
  include ('connection.php');

//sql query to select data from database
$sql = "SELECT name, program, jabatan, hpnm, date FROM candidates;";
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
    </style>
</head>
<body>
    <h2><b>Candidates List</b></h2>
    <input type='search' id='search-candidates' name='search-candidates' placeholder='Cari Calon'/>
    <input type='submit' value='Cari' id='btnSearch' name='btnSearch'/>
    <br><br>
    <table align='center'>
        <tr>
            <th>No. </th>
            <th>Nama Penuh</th>
            <th>Program</th>
            <th>Jabatan</th>
            <th>HPNM</th>
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
            <td><?php echo $rows['program'];?></td>
            <td><?php echo $rows['jabatan'];?></td>
            <td><?php echo $rows['hpnm'];?></td>
        </tr>
        <?php
            $i++;
            }
        ?>
    </table>
</body>
</html>
