<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fnamber = filter_input(INPUT_POST, "fnamber", FILTER_SANITIZE_NUMBER_FLOAT);
        $lnamber = filter_input(INPUT_POST, "lnamber", FILTER_SANITIZE_NUMBER_FLOAT);
        $opr = htmlspecialchars($_POST["opr"]);

        $err = false;
        if (empty($fnamber) || empty($lnamber) || empty($opr) || $opr == "none") {
            echo "<div class='error'>Please fill in all fields and select an operator.</div>";
            $err = true;
        }

        if (!is_numeric($fnamber) || !is_numeric($lnamber)) {
            echo "<div class='error'>Please enter valid numbers.</div>";
            $err = true;
        }

        if (!$err) {
            $result = match ($opr) {
                "add" => $fnamber + $lnamber,
                "sub" => $fnamber - $lnamber,
                "mul" => $fnamber * $lnamber,
                "div" => $fnamber / $lnamber,
                default => "Invalid operator",
            };

            echo "<div class='result'>Result: " . $result . "</div>";
        }
    }

    echo "<p><a href='" . $_SERVER["HTTP_REFERER"] . "'>Back to Calculator</a></p>";
    ?>

</body>

</html>