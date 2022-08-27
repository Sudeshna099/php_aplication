<?php
$inser=false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con= mysqli_connect($server,$username,$password);
if(!$con)
die("connection to the database failed due to". mysqli_connect_error());
//else
//echo "success connection to db";

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['Gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$payment_method=$_POST['payment_method'];
$desc=$_POST['desc'];
$sql ="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `payment_method`, 
`desc`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$payment_method', 
'$desc', current_timestamp())";
//echo $sql;
if($con->query($sql)==true){
 //   echo "succesfully inserted";
 $insert=true;
}

else
echo "Error: $sql <br> $con->error ";

$con->close;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img class="bg" src="bgFatafati.jpg" alt="TMSL">
        <h3>Welcome to Techno India Goa trip plan</h3>
        <p>Enter your Details and submit the form to confirm ur participation</p>
        <?php
        if($insert==true){
            echo "<p class='submitmsg'>Thanks for submitting the form and taking first step to Goa Trip</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" Name="name" ID="name"placeholder="Enter your name">
            <input type="age" Name="age" ID="age" placeholder="Enter your age">
            <input type="Gender" Name="Gender" ID="Gender"placeholder="Enter your gender">
            <input type="email" name="email" id="email"placeholder="Enter your email">
            <input type="phone" name="phone" id="phone"placeholder="enter phone number">
            <input type="payment_method" name="payment_method" id="payment_method"placeholder="enter payment method">
            <textarea name="desc" id="desc" cols="20" rows="6" placeholder="enter other info"></textarea>
            <button class="btn">submit</button>
                    </form>
    </div>
    <script src="index.js"></script>

</body>
</html>