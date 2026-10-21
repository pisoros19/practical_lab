<?php
include 'process.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate House Electricity Bill</title>
</head>

<body>
    <div style="margin: 20px;">
        <h1>House Electricity Bill Calculator</h1>
        <?php
        //display error message if there is any
        if ($error != "") {
            echo "<h3 style='color:red;'>$error</h3>";
        }
        ?>
        <table border="1">
            <tr>
                <th>Block Tariff (per month) </th>
                <th>Unit Rate </th>
                <th>Rate </th>
            </tr>
            <tr>
                <td>for the first 200 kWh (1-200 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.218</td>
            </tr>
            <tr>
                <td>for the next 100 kWh (201–300 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.334</td>
            </tr>
            <tr>
                <td>for the next 300 kWh (301 – 600 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.516</td>
            </tr>
            <tr>
                <td>for the next 300 kWh (601 – 900 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.546</td>
            </tr>
            <tr>
                <td>for the next 400 kWh (901 – 1300 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.571</td>
            </tr>
            <tr>
                <td colspan="3">The minimum monthly charge is RM300</td>

            </tr>


        </table>
    </div>
    <br>


    <div>
        <form action="" method="post">
            <label for="units">Enter your first 200 kWh (1-200 kWh) per month:</label>
            <input type="number" name="first" id="">


            <br>



            <label for="units">Enter your first 100 kWh (201-300 kWh) per month:</label>
            <input type="number" name="second" id="">


            <br>



            <label for="units">Enter your first 300 kWh (301-600 kWh) per month:</label>
            <input type="number" name="third" id="">


            <br>



            <label for="units">Enter your first 300 kWh (601-900 kWh) per month:</label>
            <input type="number" name="fourth" id="">


            <br>



            <label for="units">Enter your first kWh (901 kWh onwards) per month:</label>
            <input type="number" name="fifth" id="">
            <br>
            <button type="submit" name="calculate">Calculate bill</button>
            <button type="reset" name="reset">Reset</button>

        </form>
    </div>


</body>

</html>

<?php
if ($showBill) {
    echo "<hr>";
    echo "<h1>Electricity Bill</h1>";

    echo "<br> First input:  " . $firstkWh . " * 0.218 = RM" . $firstcharge;
    echo "<br> Second input: " . $secondkWh . " * 0.334 = RM" . $secondcharge;
    echo "<br> Third input: " . $thirdkWh . " * 0.516 = RM" . $thirdcharge;
    echo "<br> Fourth input: " . $fourthkWh . " * 0.546 = RM" . $fourthcharge;
    echo "<br> Fifth input: " . $fifthkWh . " * 0.571 = RM" . $fifthcharge;
    echo "<br> Total kWh: " . $totalkwh . " kWh";
    echo "<br> Total charge: RM" . $totalcharge;
    echo "<br> SST (6%): RM" . $sst;

}
?>