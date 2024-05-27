<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Calculations</title>
</head>
<body>
    <h1>Sum numbers from 0 to 30</h1>

    <h2>Sum of Numbers from 0 to 30</h2>
    <?php
    function sum_numbers() {
        $total = 0;
        for ($i = 0; $i <= 30; $i++) {
            $total += $i;
        }
        echo "The sum of numbers from 0 to 30 is: $total";
    }

    sum_numbers();
    ?>

    <h2>Rectangle Area Calculator</h2>
    <?php
    function rect_area($length = 10, $width = 20) {
        $area = $length * $width;
        echo "Area of Rectangle with length $length & width $width is $area";
    }

    rect_area();
    ?>
</body>
</html>