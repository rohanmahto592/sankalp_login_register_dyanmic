<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Welcome</title>

</head>
<body>

    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <div class="form">
    <a class="submit" href="logout.php">Logout</a>
      <div class="title">Welcome</div>
     
      <div class="subtitle">Let's Fill the Details</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" placeholder=" "/>
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Branch</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">College</label>
      </div>
      <div class="input-container ic2">
        <input id="email" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Passout Year</>
      </div>
      <a style="color:white;text-align:center;font-size:20px;margin-top:20px" class="submit" href='profile.html'>submit</a><br/>
      
    </div>
   
</body>
</html>