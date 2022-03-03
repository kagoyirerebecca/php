<!doctype html>
<head> 
    <title>Register Form</title>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/W3.css">
</head>
<body>
    <div class="w3-card w3-margin w3-padding">
        <?php 
        if (isset($_GET['error'])):?>
        <div class="w3-panel w3-red">
  
             <p><?php  echo $_GET['error'];?></p>
         </div>  
       <?php endif; ?>
        <h2>Register</h2>
        <form method="POST" action="register.php" class="w3-container">
            <label class="w3-label w3-text-blue">First name</label>
            <input class="w3-input w3-border" name="first_name" type="text">
            <br>
            <label class="w3-label w3-text-blue">Last name</label>
            <input class="w3-input w3-border " name ="last_name" type="text">
            <br>
            <label class="w3-label w3-text-blue">Email</label>
            <input class="w3-input w3-border" name="email" type="text">
            <br>
            <label class="w3-label w3-text-blue">Location</label>
            <select class="w3-input w3-border"name="location">
                <option value="Location1">Location 1</option>
                <option value="Location2">Location 2</option>
                <option value="Location3">Location 3</option>
            </select>
            <br>
            <input type="submit" value="submit">
        </form>
</div>    
</body>
</html>