<?php 
    include('connection.php');

    // SQL query to select data from database
    $sql = " SELECT name, icNo, regNo, phoneNo, program, jabatan, date FROM candidates";
    $result = mysqli_query($con, $sql);

    mysqli_close($con);
?>

<html>
    <head>
        <title>Senarai Calon</title>
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
            margin-top: auto; 
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>

    </head>
    <body>
        <h2><b>Senarai Calon</h2>
        <input type='search' id='search-candidates' name='search-candidates' placeholder='Cari Calon'/>
        <input type='submit' value='Cari' id='btnSearch' name='btnSearch'/>
        <input type='submit' value='Tambah' id='btnAdd' name='btnAdd'/>
        <br></br>
        <table align='center'>
            <tr>
                <th>No. </th>
                <th>Nama Penuh</th>
                <th>No. Kad Pengenalan</th>
                <th>No. Pendaftaran</th>
                <th>No. Telefon Bimbit</th>
                <th>Program</th>
                <th>Jabatan</th>
                <th>Tarikh Permohonan</th>
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
                <td><?php echo $rows['icNo'];?></td>
                <td><?php echo $rows['regNo'];?></td>
                <td><?php echo $rows['phoneNo'];?></td>
                <td><?php echo $rows['program'];?></td>
                <td><?php echo $rows['jabatan'];?></td>
                <td><?php echo $rows['date'];?></td>
            </tr>
            <?php
                }
            ?>
            
        </table>
    </body>
    <body>
    <div class="container">
        <a href="main_page_officer.php" class="btn">BACK</a>
    </div>
    </body>
    
</html>