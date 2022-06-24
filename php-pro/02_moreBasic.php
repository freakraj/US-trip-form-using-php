<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
    <style>
        *{
            margin:0;
            padding : 0;
            box-sizing:border-box;
        }
        .container {
            max-width: 80%;
            background-color : violet;
            margin:auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets Learn About Php</h1>
        this is the container <br>
        <?php
        $age = 7;
        if($age>18){
            echo "You can go to party"; 

        }
        else if($age === 7){
            echo "Your age is 7 you are child <br>";

        }
        else{
            echo "YOU are not eligible the party";

        }

        $language = array("hindi","english","urdu","telgu","tamil");
        echo "<br>";
        // echo $language[1];
        // echo "<br>";
        // echo count($language); // count array eliment 
        // ======================
        $a = 0;
        while($a<=10){
            echo "this is a value of : ";
            echo $a;
            echo "<br>";
            $a++;
        }
        // =======================
        // Iterating array in php using while loop;
        $a = 0;
        while($a < count($language)){
            echo "<br> The Value of Language while loop is: ";
            echo $language[$a];  // jaise javascript me array[i] krte the
            $a++;

        }
        echo "<br>";
        // Iterating array in php using do while loop;
        // $language = array("hindi","english","urdu","telgu","tamil");
        $a=0;
        do {
            # code...
            echo "This is types of Languages with the help of do while loop : ";
            echo $language[$a];
            echo "<br>";
            $a++;

        } while ($a < count($language));

        echo "<br>";

        // for loop
        // $a = 0;
        for ($a=0; $a < 10; $a++) { 
            # code...
            echo "hello word print with the help of for loop: ";
            echo $a;
            echo "<br>";
        }
        // foreach loop
        foreach ($language as $value) {
            # code...
            echo "<br> The value from foreach loop is :";
            echo $value;
        }
        





        
        
        ?>
    </div>
</body>
</html>