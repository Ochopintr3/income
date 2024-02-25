<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Firstname</label>
        <input type="text" name="firstname" required>
        <br><br>
        <label for="">Lastname</label>
        <input type="text" name="lastname" required>
        <br><br>
        <label for="">Position</label>
        <input type="text" name="position" required>
        <br><br>
        <label for="">Salary</label>
        <input type="text" name="salary" required>
        <br><br>
        <label for="">Income Tax (percentage)</label>
        <input type="text" name="tax" Value="20">
        <br><br>
        <button>Submit</button>
    </form>

    <?php
    if ($_GET) {
        $firstname = $_GET["firstname"];
        $lastname = $_GET["lastname"];
        $position = $_GET["position"];
        $salary = $_GET["salary"];
        $tax = isset($_GET["tax"]) ? $_GET["tax"] : 20;

        if (empty($firstname) || empty($lastname) || empty($position) || empty($salary)) {
            echo "Please fill in all required fields.";
        } else {
            $income = floatval($salary);
            $taxPercentage = floatval($tax) / 100;
            $withheldIncome = $income * $taxPercentage;
            $accruedSalary = $income - $withheldIncome;
            
            echo "<h2>Payroll Summary</h2>";
            echo "<table border='1'>
                    <tr>
                        <th>Field</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>Firstname</td>
                        <td>$firstname</td>
                    </tr>
                    <tr>
                        <td>Lastname</td>
                        <td>$lastname</td>
                    </tr>
                    <tr>
                        <td>Position</td>
                        <td>$position</td>
                    </tr>
                    <tr>
                        <td>Amount of Salary</td>
                        <td>$salary</td>
                    </tr>
                    <tr>
                        <td>Income Tax (percentage)</td>
                        <td>$tax%</td>
                    </tr>
                    <tr>
                        <td>Withheld Income</td>
                        <td>$withheldIncome</td>
                    </tr>
                    <tr>
                        <td>Accrued Salary</td>
                        <td>$accruedSalary</td>
                    </tr>
                </table>";
        }
    }
    ?>

    <style>
        table{
            border-collapse: collapse;
        }
    </style>
</body>
</html>