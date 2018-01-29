<!DOCTYPE html>
<html>   
<head>
<meta charset="UTF-8">
<title>01 Variables & Conditionals</title>
</head>

<body>

<!--*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************-->

 <!--01. Create and use a string variable-->

<?php
    $txt = "Northwest Vista";
    echo "I enjoy " . $txt . "!";
?>
    
<br/>
<br/>
    
<!--02. Create and use an integer variable-->

<?php
    
    $x = 5;
    $y = 4;
    $z = $x + $y;
    echo $z;
?>

<br/>
<br/>
    
<!--03. Create and use a boolean variable-->

<?php
    $Birthday = date('04/27');
    $currentDate = date('m/d');
    echo "My birthday is: $Birthday";
    echo "<br/>";
    echo "The Current Date is: $currentDate";
    echo "<br/><br/>";
    
    // Comparing Boolean variables then echoing based on true or false
    if ($Birthday == $currentDate){
        echo "Today is my birthday!";
    }
    else{
        echo "Today Isn't my birthday!";
    }
?>
    
<br/>
<br/>
<!--04. Create and call one or more function(s)-->
    
<?php

    $date1 = new DateTime("2018-01-28"); //can't figure out how to use current date with DateTime function
    $date2 = new DateTime("2018-04-27");
    $diff = $date2->diff($date1)->format("%a");
    
    echo "$diff days until my birthday.";
?>
    
<br/>
    
<?php
    $now = time(); // or your date as well
    $birthdayDate = strtotime("2018-04-27");
    $datediff = $birthdayDate - $now;

    echo round($datediff / (60 * 60 * 24)) . " days until my birthday.";
?>

<br/>
<br/>

<!--05. Basic conditional statement-->

<?php
$time = date("H");

if ($time < "12") {
    echo "Morning!";
} elseif ($time < "18") {
    echo "Afternoon!";
} else {
    echo "Night!";
}
?>

<br/>
<br/>
<!--06. Echo to page-->

<!-- Echo used throughout file -->



</body>
</html>