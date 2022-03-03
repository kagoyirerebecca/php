<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION['favcolor'] = Array("green");
$_SESSION['favanimal'] = Array("cat");
echo "Session variables are set.";
?>

</body>
</html>