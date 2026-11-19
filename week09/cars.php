<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Exhibition - Car List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Used Car Exhibition Inventory</h1>

<?php
    require_once "settings.php";
    $dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);
    if ($dbconn) {
        $query = "SELECT * FROM carsGHGHG";
        $result = mysqli_query($dbconn, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>Car ID</th>";
                echo "<th>Make</th>";
                echo "<th>Model</th>";
                echo "<th>Price ($)</th>";
                echo "<th>Year of Manufacture (YOM)</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['car_id'] . "</td>";
                    echo "<td>" . $row['make'] . "</td>";
                    echo "<td>" . $row['model'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['yom'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>There are no cars to display.</p>";
            }
        }
        mysqli_close($dbconn);
    } else {
        echo "<p>Unable to connect to the database.</p>";
    }
?>
</body>
</html>


