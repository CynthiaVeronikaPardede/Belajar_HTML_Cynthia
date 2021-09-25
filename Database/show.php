<?php
    include_once 'db_connection.php';
    $result = mysqli_query($link, "SELECT * FROM produk");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Full</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            table{
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                border: 1px solid black;
            }
            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 5px;
                text-align: center;
            }

            tr:nth-child(even) {
                background-color: white;
            }
        </style>
    </head>
    <body>
        <?php
            if (mysqli_num_rows($result) > 0) {
        ?>
        <table class="table-responsive-sm table table-hover table-borderless table-dark table-striped">
            <thead>
                <tr>
                    <td scope="row"><b>Name</b></td>
                    <td scope="row"><b>Quantity</b></td>
                    <td scope="row"><b>Price</b></td>
                    <td scope="row"><b>Description</b></td>
                </tr>
            </thead>    
        
            <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row["Name"]; ?></td>
                    <td><?php echo $row["Quantity"]; ?></td>
                    <td><?php echo $row["Price"]; ?></td>
                    <td><?php echo $row["Description"]; ?></td>
                </tr>
            </tbody>
            
            <?php
            $i++;
            }
            ?>
        </table>
        <?php
            }
            else{
                echo "No result found";
            }
        ?>
    </body>
</html>