<?php 
$cookie_name="username";
$cookie_val="devuser";
setcookie($cookie_name,$cookie_val,time()+3600);
?>
<!doctype html>
<head>
    <title>cookie - PHP</title>
</head>
<body>
    <?php 
    if (!isset($cookie[$cookie_name])){
        echo  'cookie -'.$cookie_name .'is not set';
    }else{
        echo  'cookie'.$cookie_name .'is set<br>'; 
        echo 'cookie value-'.$cookie_val; 
    }

    ?>
</body>
</html>