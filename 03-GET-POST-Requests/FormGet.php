<?php

// Session Start
session_start();

$_SESSION["title"] = "Vote the Bastards Out";

$PoliticalParties = [
    "Democrat",
    "Republican",
    "Independent",
    "Libertarian",
    "Green Party"
];

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_SESSION["title"]; ?></title>
</head>

<body>
    
<div class="form" >

<h3>Thanks for your interest in the <?php echo $_SESSION["title"]; ?> website.</h3>
    
<form action="ThankYouPageGet.php" method="get">
    
    Name, First:<br>
    <input type="text" name="NameFirst" required><br>
    
    Name, Last:<br>
    <input type="text" name="NameLast" required><br>
 
    Zip Code:
    <input type="int" name="ZipCode" required><br>
    
    <p>Select Party:
        <select name="party">
          <?php foreach ($PoliticalParties as $PoliticalPary): ?>
            <option value="<?php echo $PoliticalPary; ?>"><?php echo $PoliticalPary; ?></option>
          <?php endforeach; ?>
        </select></p>
 
    Email:<br>
    <input type="email" name="Email" required><br>
    
<input type="submit" name="Submit" value="Submit!"><br>
</form>

</div>
    
</body>
</html>