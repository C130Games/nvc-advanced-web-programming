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
<br/>
<p>Thanks <?php echo $_GET['NameFirst'] . " for being a " . $_GET['party'];?>!</p>
<p>We will email you at <?php echo $_GET['Email']; ?> as the election get's closer.</p>
    
<?php

// destroy the session 
session_destroy();

?>
    
</body>
</html>