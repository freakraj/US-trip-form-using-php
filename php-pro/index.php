<?php
// if(isset($_POST['name'])){ // ager kisi ne post request bheji aur uske sath nam bheja tbi ye run hoga aur tabhi connection bhi bnega verna run nhi hoga.
    $servername = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($servername, $username, $password);

    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }
    // echo "Success connecting to the db";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    
    $sqlInsert = " INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    echo $sqlInsert;
    // -> this is object operator aur isko run krne ke liye query function ka use krung

    // mysql_query($sqlInsert);
    // if($con->query($sqlInsert) == true ){
    //     echo "New record created successfully";
    // }
    // else{
    //     echo "ERROR : $sqlInsert <br> $con->error";
    // }
    // $con->close();
    if(mysqli_query($con, $sqlInsert)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$name\n $age\n "
            . "$gender\n $email\n $phone\n $desc");
    } else{
        echo "ERROR: Hush! Sorry $sqlInsert. "
            . mysqli_error($con);
    }
    // Close connection
    mysqli_close($con);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Stoke&display=swap" rel="stylesheet">

</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT kanpur">
    <marquee width="100%" direction="left" height="100px" class="marq" scrollamount="12">What’s new at IIT Kanpur? NTA has released JEE Main Admit Card 2022 for Session-I. IIT JAM Third Admission List is scheduled for release on June 25. Additionally, JEE Main 2022 session 1 exam dates have now been revised from June 23 to June 29. Additionally, IIT Kanpur has launched a PG Certificate course in Blockchain and JEE Main/ GATE is not required for it. The course will be conducted between June 25 and September 18 and is of a four-month duration..</marquee>
    <div class="container">
        <h1>Welcome to IIT Kanpur US Trip Form</h1>
        <p class="p1">Enter your details and submit this form to confirm your participation in the trip</p>
        <p class="p2">Thanks for submitting your form . We are happy to see you joining us for the US trip</p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your name">
            <input type="text" name="age" id="age" placeholder="Enter Your age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here..."></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn1">Reset</button> -->
        </form>

    </div>
    <script src="index.js"></script>
   

</body>
</html>