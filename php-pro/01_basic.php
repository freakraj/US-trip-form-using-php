<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        this is my first php page
    
    <?php
       echo "Hello word and this is my first printed using php";  
       
    //    hello word
    ?>
    </div>
    <?php
    define('pi',3.14);
          echo "hello word again";

          $vari1 = 45;
          $vari2 = 90;
          echo$vari1;
          echo$vari2;
          echo $vari1 + $vari2;
          echo "<br>";

        //   Operators in php 
        // arithmetic operators
        echo "<br>";
        echo "this value of vari1 + vari2 is"; 
        echo "<br>";
        echo $vari1 + $vari2;
        echo "<br>";
        echo "this value of vari1 - vari2 is"; 
        echo "<br>";
        echo $vari1 - $vari2; 
        echo "<br>";
        echo "this value of vari1 * vari2 is"; 
        echo "<br>";
        echo $vari1 * $vari2; 
        echo "<br>";
        echo "this value of vari1 / vari2 is"; 
        echo "<br>";
        echo $vari1 / $vari2;
        // assingnment operator 
        echo "<br>";
        $newVar = $vari1;
        // $newVar +=1;
        // $newVar -=1;
        // $newVar *=2;
        $newVar /=2;
        echo "the value of new variable is = ";
        echo $newVar;
        echo "<br>";

        // comparison operator 
        echo "<h1> Comparison Operator </h1>";
        echo "The value of 1==4 is";
        echo "<br>";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1!=4 is";
        echo "<br>";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1>=4 is";
        echo "<br>";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1<=4 is";
        echo "<br>";
        echo var_dump(1<=4);
        echo "<br>";
        // increment/decrement operator 
        echo "this is increment vari1";
        echo "<br>";
        // echo $vari1++;
        // echo "<br>";
        // echo $vari1;
        echo "============================";
        echo "<br>";
        echo $vari1--;
        echo "<br>";
        echo $vari1;
        echo "<br>";
        echo "============================";
        echo "<br>";
        echo ++$vari1;
        echo "<br>";
        echo $vari1;
        echo "<br>";
        echo "============================";
        echo "<br>";
        echo --$vari1;
        echo "<br>";
        echo $vari1;
        echo "<br>";
        echo "============================";
        // logical operator
        // and (&&)
        // or (||)
        // xor
        // not (!)
        echo "<br>";
        // $myVar = (true and true); // and ki value true hone ke liye dono ko true hona pdega
        // $myVar = (false and true);  // output false 
        // $myVar = (false or true); // output true
        // $myVar = (false xor true);  // output true
        $myVar = (false xor false);  // false
        echo "<br>";
        echo var_dump($myVar);
        echo "<br>";
        echo "=============================";
        echo "<br>";
    
    ?>
    <?php
    // Data types in php
    // 1. string
    // 2. Integer
    // 3. Float
    // 4. Boolean
    // 5. Array
    // 6. Object    
    echo "Data Type <br>";

    $var1 =" this is a string";
    echo var_dump($var1);
    echo "<br>";

    $var1 =90;
    echo var_dump($var1);
    echo "<br>";

    $var1 =90.3;
    echo var_dump($var1);
    echo "<br>";

    $var1 =true;
    echo var_dump($var1);
    echo "<br>";
    echo pi;
    
    
    ?>



</body>
</html>