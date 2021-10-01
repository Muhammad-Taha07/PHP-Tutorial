<?php
$insert = false;
if(isset($_POST['name']))
{
$server  = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die ("connection to this database failed due to".mysqli_connect_error());
}
// echo "Success connecting to the db";
 
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc  = $_POST['desc'];  // "desc wasn't defined in Database's Table so i changed "other" into desc in table which made it working."
$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone','$desc', current_timestamp());";
// echo $sql;

if($con->query($sql) == true){
    // echo"Successfully inserted";
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?>


<!-- My HTML Starts from here -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="University">
    <div class = "container">
        <h1>Welcome to IQRA University Travel Form</h1>
        <p><strong>Enter your details and submit your form to confirm your participation in the trip</strong></p>
       
       <?php
       if($insert == true){
        echo "<p class = 'submitMsg'><p><strong>Thank you for submit the form. We are happy to see you joining for the US trip</strong></p>";
       }
        ?>
        
        

    <form action="index.php" method="post">

        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter Your Age">
        <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
        <input type="email" name="email" id="email" placeholder="Enter your Email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">

<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here">
</textarea>
<button class="btn">Submit</button>

</form>
</div>

<script src="index.js"></script>

</body>
</html>
<!-- Course watched till 2:18:32 -->
<!-- Fixed database connectivity issue from table. -->
