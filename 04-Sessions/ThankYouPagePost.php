<?php

// Session Start
session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_SESSION["title"]; ?></title>
</head>

<body>

<h3>Thank you for contacting <?php echo $_SESSION["title"]; ?></h3>
<p>Thanks <?php echo $_POST['NameFirst'] . " for being a " . $_POST['Party'];?>!</p>
<p>We will email you at <?php echo $_POST['Email']; ?></p>
    
<?php

// destroy the session 
session_destroy();

?>
    
</body>
</html>