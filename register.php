<?php 
$first_name=  $_POST['first_name'];
$last_name= $_POST['last_name'];
$email=$_POST['email'];
$location=$_POST['location'];
if($first_name=='' || $last_name=='' || $email=='' || $location==''  ){
    header("location:index.php?error=please%20fill%20in%20the%20fields");
}
?>
<!doctype html>
<head> 
    <title>Userprofile</title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/W3.css">
</head>
<body>
    <div class="w3-card w3-margin w3-padding">
        <h2>User Profile</h2>
        <h3><?php echo $first_name ;?> <?php  echo $last_name ;?></h3>
        <ul>
            <li><?php echo $email;?></li>
            <li><?php echo $location;?></li>
        </ul>
</div>   
</body>
</html>