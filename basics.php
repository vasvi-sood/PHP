<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php website</title>
</head>
<body>
   <div class="container">
   PHP first website. First of it's kind.
   <!-- add php to html -->
   <?php
  $var = 22;
   echo $var+5+6+7;
      //using html tags insde php
   echo "<br>";
   echo "The value of var is";
   echo "<br>";
   echo $var;

$var=1000+$var;
echo "<br>";
echo "The new value of var is";
echo "<br>";
echo $var;

echo "<h4>comaprison</h4>";
echo " is 1<=5";
echo "<br>";
echo var_dump(1<=5 and 1==1) ;
// and same as &&
echo "<br>";
echo var_dump(true xor true);
echo "<br>";

//Datatypes
// 1.string
// 2. int
// 3. float 
// 4. array
// 5. object
// 6. boolean 
echo var_dump("I'm awesome");
echo var_dump(23);
echo var_dump(3.14);
echo var_dump(true);
echo var_dump(['a',2,3]);

///constatnt data types
define('PI',3.14);
echo PI;

    ?>
   </div> 
</body>
</html>