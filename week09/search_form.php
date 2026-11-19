<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Search Form</title>
</head>
<body>
    <h1>Search for a Car Model</h1>
    <form action="search_result.php" method="GET">
        <label for="model">Car Model:</label>
        <input type="text" id="model" name="model" required>
        <button type="submit">Search</button>
    </form>
</body>
</html>