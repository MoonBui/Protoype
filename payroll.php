<?php
    include("connectDB.php");
    session_start();

    // Select data from the Employee Salary table
    // $employeeID = $_SESSION["userid"];
    $sql = "SELECT * FROM `Employee Salary`";
    $result = $conn->query($sql);

    $hoursWorked = '';
    $salary = '';
    $payDay = '';

    if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $hoursWorked = $row['HoursWorked'];
        $salary = $row['Salary'];
        $payDay = $row['PaymentDate'];
    }
    } else {
    echo "0 results";
    }

    mysqli_close($conn);
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <section class="curved-background">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css?version=0.0.1" type="text/css">
            <title>Payroll</title>
        </head>
        <body>
            <table>
                <tr>
                    <th>Hours Worked</th>
                    <th>Salary</th>
                    <th>Payment Date</th>
                </tr>
                <tr>
                    <td> <?php echo $hoursWorked ?> </td>
                    <td> <?php echo $salary ?> </td>
                    <td> <?php echo $payDay ?> </td>
                </tr>
            </table>
        </body>
    </section>
</html>