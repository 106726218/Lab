<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
        // 1. Lấy Họ và Tên
        $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
        $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";

        // 2. Lấy Species và chuyển đổi sang tên đầy đủ giống yêu cầu
        $species_code = isset($_POST["species"]) ? $_POST["species"] : "";
        $species = "Unknown";
        if ($species_code == "M") {
            $species = "Human";
        } elseif ($species_code == "D") {
            $species = "Dwarf";
        } elseif ($species_code == "E") {
            $species = "Elf";
        } elseif ($species_code == "H") {
            $species = "Hobbit";
        }

        // 3. Lấy Age và Number of travellers (partysize)
        $age = isset($_POST["age"]) ? $_POST["age"] : "";
        $partysize = isset($_POST["partysize"]) ? $_POST["partysize"] : "";

        // 4. Lấy Meal Preference (food)
        $meal = isset($_POST["food"]) ? $_POST["food"] : "None";

        // 5. Xử lý các lựa chọn tour (accom, 4day, 10day)
        $tours = array();
        if (isset($_POST["accom"])) {
            $tours[] = "Accommodation";
        }
        if (isset($_POST["4day"])) {
            $tours[] = "4 Day Tour";
        }
        if (isset($_POST["10day"])) {
            $tours[] = "10 Day Tour";
        }

        // Gom chuỗi các tour đã chọn để hiển thị
        $tour_string = "";
        if (!empty($tours)) {
            // Nối các tour lại bằng chữ "and" nếu chọn nhiều cái
            $tour_string = implode(" and ", $tours);
        } else {
            $tour_string = "No tours selected";
        }

        // 6. Hiển thị kết quả ra màn hình đúng chuẩn mẫu của bài Lab
        echo "<p>Welcome $firstname $lastname !</p>";
        echo "<p>You are now booked on the $tour_string</p>";
        echo "<p>Species: $species</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Meal Preference: $meal</p>";
        echo "<p>Number of travellers: $partysize</p>";
    ?>
</body>
</html>