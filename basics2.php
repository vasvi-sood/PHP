<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baiscs2</title>
</head>
<style>

*{
    margin :0;
    padding:0;
    background-color: purple;
    box-sizing: border-box;
}
.container{
    max-width: 80%;
    background-color: pink;
    margin: auto;
}

</style>
<body>

<div class="container">
      Learning php 
      <br>
     <?php 
       $age =10;
 
        if($age>18)
       echo "party ";
       else
       echo " no party ";
    //    creating an array
       $arr= array("hello",1,true,1.55);
       echo var_dump($arr);
       echo $arr[0];
       echo "<br>";
       echo count($arr);

     //loops
     $a=0;
     while ($a <= 10) {

        echo "<br>";
                 echo $a;
         $a++;
     }  
     echo "<br>";
     for ($i=0; $i < 10; $i++) { 
        echo "<br> vasvi ";
        echo "hey there";
       
     }


    //  iterating arrays

    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i];
        echo "<br>";
    }
$b=100;
    do {
      echo "value of b =100"; 
    } while ($a <= 10);


    //function
    function print5()
    {
        echo "<br> FIVE";
    }

    function num($a)
    {
        return "<br> num is $a";
    }

    echo num(500);
    print5();

    //strings
$stri= "Vasvi Sood";
echo "<br> Length of string $stri  is: ";
echo strlen($stri);
//this concatination is same as 
echo "<br> Length of string " . $stri  ." is: ";
echo strlen($stri);
echo "<br> Words in $stri are ". str_word_count($stri);

echo "<br> reverse word : " . strrev($stri); 
echo "<br> position of as in vasvi <br> " . var_dump(strpos("Vasvi","as"));
echo "<br> replaced string ". str_replace('o','z',$stri);
     ?> 
</div>
</body>
</html>