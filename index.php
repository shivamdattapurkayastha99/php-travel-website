<?php
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if (!$con) {
    die("connection to this database failed due to " .mysqli_connect_error());
}
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];
// echo "Success connecting to db";
$sql="INSERT INTO `trip`.trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
echo $sql;
if ($con->query($sql)==true) {
    echo "Successfully inserted ";
}
else {
    echo "ERROR: $sql <br> $con->error";

}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Shivam Travel Website</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to Shivam Travels US Trip Form </h1>
        <p><b>Enter your details to confirm your trip with us</b></p>
        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="tel" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information"></textarea>
        <br>
        <button class="btn" >Submit</button>
        </form>
        <!-- <button class="btn">Reset</button> -->
    </div>

    <script src="index.js"></script>
    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('1', 'shivam', '21', 'male', 'xyz@gmail.com', '1234', 'I want a business class seat', current_timestamp()); -->
</body>
</html>