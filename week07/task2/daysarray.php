<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Experimenting with Arrays</title>
</head>
<body>
    <h1>PHP Variables, arrays and operators</h1>
    <?php
        // Step 1: Mảng các ngày trong tuần bằng tiếng Anh
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        
        echo "<p>The days of the week in English are:</p>";
        echo "<p>";
        // In ra từng phần tử cách nhau bởi dấu phẩy
        echo "$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].";
        echo "</p>";

        // Step 3: Cập nhật lại mảng thành tiếng Pháp
        $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
        
        echo "<p>The days of the week in French are:</p>";
        echo "<p>";
        echo "$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6].";
        echo "</p>";
    ?>
</body>
</html>