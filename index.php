<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <style>
        table {
            width: 80%;
        }

        th, td {
            text-align: center;
            padding: 5px;
        }
    </style>
</head>

<body>
    <a href="add.php">Add New User</a><br/><br/>

    <table>
        <tr>
            <th>Nama produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Action</th>
        </tr>

        <?php  
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['nama_produk']."</td>";
            echo "<td>".$user_data['keterangan']."</td>";
            echo "<td>".$user_data['harga']."</td>";    
            echo "<td>".$user_data['jumlah']."</td>";    
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>";
            echo "</tr>";        
        }
        ?>
    </table>
</body>
</html>
