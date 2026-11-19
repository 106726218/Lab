<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Search Results</title>
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
    <h1>Search Results</h1>

    <?php
    require_once "settings.php";
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    if (!$conn) {
        echo "<p>Unable to connect to the database.</p>";
        exit();
    }
    if (isset($_GET['model'])) {
        $model = mysqli_real_escape_string($conn, $_GET['model']);
        $sql = "SELECT * FROM cars WHERE model LIKE '%$model%'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1' cellpadding='5'>";
                echo "<tr><th>ID</th><th>Make</th><th>Model</th><th>Price ($)</th><th>Year</th></tr>";
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
                echo "<p>🚫 No matching cars found.</p>";
            }
            mysqli_free_result($result);
        } else {
            echo "<p>Error executing query.</p>";
        }
        mysqli_close($conn);
    } else {
        echo "<p>Please enter a model to search.</p>";
    }
    ?>

    <p><br><a href="search_form.php">Back to Search</a></p>
</body>
</html>