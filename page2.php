<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page

print_r("Favorite color is " . $_SESSION["favcolor"] . ".<br>") ;
print_r("Favorite animal is " . $_SESSION["favanimal"] . ".") ;
?>

</body>
</html>