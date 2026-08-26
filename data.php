<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Output</title>
    <style>
        h1 {
            text-align: center;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 400px;
        }
        td {
            padding: 8px 12px;
            border-bottom: 1px solid #ccc;
        }
        .result {
            text-align: center;
            font-size: 22px;
            margin-top: 20px;
        }
        .excellent { color: green; }
        .good { color: #2e7dd7; }
        .fair { color: orange; }
        .needs-improvement { color: red; }

        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Input Success <br> <br>
    Student Data</h1>

    <p>NOTE: <strong>This Will NOT WORK Without SERVER</strong></p>

    <?php
    // Grab submitted values (avoid overwriting $_POST directly)
    $name          = htmlspecialchars($_POST["name"] ?? "");
    $generalScore  = floatval($_POST["GeneralScore"] ?? 0);
    $midScore      = floatval($_POST["MidScore"] ?? 0);
    $lastScore     = floatval($_POST["LastScore"] ?? 0);

    // Final grade = 30% assignment + 30% mid-term + 40% final exam
    $finalGrade = (0.30 * $generalScore) + (0.30 * $midScore) + (0.40 * $lastScore);

    // Description based on final grade
    if ($finalGrade >= 90) {
        $description = "Excellent";
        $descClass = "excellent";
    } elseif ($finalGrade >= 80) {
        $description = "Good";
        $descClass = "good";
    } elseif ($finalGrade >= 70) {
        $description = "Fair";
        $descClass = "fair";
    } else {
        $description = "Needs Improvement";
        $descClass = "needs-improvement";
    }
    ?>

    <table>
        <tr>
            <td>Student Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Assignment Grade</td>
            <td><?php echo $generalScore; ?></td>
        </tr>
        <tr>
            <td>Mid-term Exam Grade</td>
            <td><?php echo $midScore; ?></td>
        </tr>
        <tr>
            <td>Final Exam Grade</td>
            <td><?php echo $lastScore; ?></td>
        </tr>
        <tr>
            <td><strong>Final Grade</strong></td>
            <td><strong><?php echo number_format($finalGrade, 2); ?></strong></td>
        </tr>
    </table>

    <p class="result <?php echo $descClass; ?>">
        <?php echo $description; ?>
    </p>

</body>
</html>