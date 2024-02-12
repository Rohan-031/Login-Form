<?php  
    $insert=false;
if(isset($_POST['name'])){

    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if(!$con)
    {
        die("connection to the database failed due to ".mysqli_connect_error());
    }
    // echo "Success connecting to the database";

    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    // $sql= "INSERT INTO `our_trip`.`trip` (`Name`, `Age`, `Phone no.`, `Email`, `Data`) VALUES ('$name', '$age', '$email', '$phone', ' $data');";


    $sql="INSERT INTO `our_trip`.`trip` (`Name`, `Age`, `Phone no.`, `Email`, `Data`) VALUES ('$name', '$age', '$email', '$phone', '2024-02-13 00:40:29');";

    if($con->query($sql)==true)
    {
        $insert=true;
    }
    else{
        echo "Error $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h3>Welcome to travel form..</h3>
        <p>Enter your detailes to confirm your participation in the trip</p>
        <?php
        if($insert==true)
        {
           echo "<p style='color:yellow' class='msg'>Thanks for filling this form....!</p>";
        }
        ?>
    </div>
    <div class="entry">
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="name" placeholder="Enter your age">
            <input type="number" name="phone" id="number" placeholder="Enter your phone number">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <button class="btn">Submit</button>
            <button class="btn" id="reset">Reset</button>

        </form>
    </div>
</body>

</html>