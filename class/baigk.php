<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dãy số 1 đến 100</title>
    <style>
        .even {
            font-weight: bold;
            color: red;
        }
        .odd {
            font-weight: bold;
            font-style: italic;
            color: green;
        }
    </style>
</head>
<body>
    <h2>Dãy số từ 1 đến 100</h2>
    <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 == 0) {
                echo "<span class='even'>$i</span> ";
            } else {
                echo "<span class='odd'>$i</span> ";
            }
        }
    ?>
</body>
</html>
