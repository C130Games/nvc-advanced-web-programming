<!doctype html>
<html>
<head>
    
<meta charset="UTF-8">
<meta name="description" content="HTML5 template">
<meta name="keywords" content="HTML,CSS,javascript,PHP">
<meta name="author" content="James Meyer, C-130 Games, LLC">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta lang = "en">

<title>Assignment 2</title>

</head>

<!--*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************-->

<body>

<!--01. Create and Call at least one function.-->
    
<?php
    
    function daysLeftTrump() {
    $currentDay = time(); // current Year Mo Da
    $endOfTerm = strtotime("2021-01-20");
    $datediff = $endOfTerm - $currentDay;
    $roundedDate = round($datediff / (60 * 60 * 24));
    return $roundedDate;
    }

    echo daysLeftTrump() . " Days left of Trump Presidency!";
?>
    

<br />
<br />
    
<!-- 02. Create a For Loop-->

<?php 
for ($currentYear = 2018; $currentYear <= 2021; $currentYear++) {
}
    echo "I'll be 60 in the year " . $currentYear;
?>

<br />
<br />
    
<!-- 03. Create a While Loop-->

<?php
    $yearIn = 2018; //initailize variables
    $yearOut = 2021;
    
    while($yearIn <= $yearOut) { //while year is lessthan 2021 echo next line then increment
        echo "Trump is president in $yearIn <br>";
        $yearIn++;
    }
    
    echo "Trump is no longer president!" //when out of while loop echo this line
?>

<br />
<br />

<!-- 04. Create an Array-->

<?php
    $candidates = array("Beto O'Rourke", "Mary Wilson", "Donna Campbell");
    echo count($candidates) . " candidates";
    echo "<br/>";
    echo "The candidates for my area are " . $candidates[0] . ", " . $candidates[1] . " & " . $candidates[2] . ".";
?>

<br />
<br />

<!-- 05. Sort an Array-->
    
<?php
    
    $candidates = array( "Beto O'Rourke", "Bruce Jacobson", "Edward Kinbrough" );
    $party = array( "Dem", "Rep", "Dem" );
    $office = array( "Senator", "Senator", "Senator" );
    
array_multisort( $candidates, $party, $office );
    
    print_r( $candidates);
    echo "<br/>";
     print_r( $party);
    echo "<br/>";
     print_r( $office);
    echo "<br/>";
    
?>

<br />
<br />

<!--06. Create a Switch Statement-->

<?php
$Party = rand(0,5);
    
switch ($Party) {
        
    case "1":
        echo " random one";
        break;
    case "2":
        echo "random two";
        break;
    case "3":
        echo "random three";
        break;
    default:
        echo "Not a 1 to 3";
}

?>
    
</body>
</html>