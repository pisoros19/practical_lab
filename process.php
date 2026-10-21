<?php

$error = "";
$showBill = false;

if (isset($_POST['calculate'])) {
    $showBill = true;
    echo "The input for the first kWh: " . $_POST['first'];


    $firstkWh = $_POST['first'];
    $secondkWh = $_POST['second'];
    $thirdkWh = $_POST['third'];
    $fourthkWh = $_POST['fourth'];
    $fifthkWh = $_POST['fifth'];

    if ($firstkWh == "") {
        $firstkWh = 0;
    }
    if ($secondkWh == "") {
        $secondkWh = 0;
    }
    if ($thirdkWh == "") {
        $thirdkWh = 0;
    }
    if ($fourthkWh == "") {
        $fourthkWh = 0;
    }
    if ($fifthkWh == "") {
        $fifthkWh = 0;
    }

    if ($firstkWh < 0 || $secondkWh < 0 || $thirdkWh < 0 || $fourthkWh < 0 || $fifthkWh < 0) {
        $error = "Invalid input. Please enter a positive number.";
    } else if ($firstkWh > 200) {
        $error = "Invalid input. The first kWh should not exceed 200.";
    } else if ($secondkWh > 100) {
        $error = "Invalid input. The second kWh should not exceed 100.";
    } else if ($thirdkWh > 300) {
        $error = "Invalid input. The third kWh should not exceed 300.";
    } else if ($fourthkWh > 300) {
        $error = "Invalid input. The fourth kWh should not exceed 300.";


    } else if ($firstkWh + $secondkWh + $thirdkWh + $fourthkWh + $fifthkWh == 0) {
        $error = "Please enter at least one value.";
    } else {

        $firstcharge = $firstkWh * 0.218;
        $secondcharge = $secondkWh * 0.334;
        $thirdcharge = $thirdkWh * 0.516;
        $fourthcharge = $fourthkWh * 0.546;
        $fifthcharge = $fifthkWh * 0.571;

        // Calculate total kWh and total charge
        $totalkwh = $firstkWh + $secondkWh + $thirdkWh + $fourthkWh + $fifthkWh;

        $totalcharge = $firstcharge + $secondcharge + $thirdcharge + $fourthcharge + $fifthcharge;

        if ($totalkwh < 600) {
            $sst = $totalcharge * 0.06;
        } else {
            $sst = 0;
        }
        $totalcharge += $sst;


        echo "<br>";
        echo "The charge for the first 200 kWh is: RM" . number_format($firstcharge, 2);
        echo "<br>";
        echo "The charge for the next 100 kWh is: RM" . number_format($secondcharge, 2);
        echo "<br>";
        echo "The charge for the next 300 kWh is: RM" . number_format($thirdcharge, 2);
        echo "<br>";
        echo "The charge for the next 300 kWh is: RM" . number_format($fourthcharge, 2);
        echo "<br>";
        echo "The charge for the next 400 kWh is: RM" . number_format($fifthcharge, 2);

    }
}


?>