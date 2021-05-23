<?php
//kisi ne name ke saath post request kiya
$insert=false;
if(isset($_POST['submit']))
{

 $server ="localhost";
 $username ="root";
 $password="";
 $dbname = "Trip";
 $con =mysqli_connect($server,$username,$password,$dbname);
 if(!$con)
 die(" connection refused " . mysqli_connect_error());

//  echo "Connection to db successfull";
$pname=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$amount=$_POST['amount'];
$excited=$_POST['excited'];



$sql = "INSERT INTO `Trip` (`pname`, `email`, `phone`, `amount`, `addition`, `dt`) VALUES ( '$pname', '$email', '$phone', '$amount', '$excited', current_timestamp()); 
";
// echo $sql;

// -> is an object operaor and query is a function
if($con->query($sql)==true)
{
    echo "Inserted";
$insert =true;
}
else
echo "error $con->error" ;

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Trip around</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet"> 
</head>
<body>
   <div class="container">
       <h1>
           NITH Let's go on a trip    </h1>
           <?php
           if($insert==true){
              
         echo "<p color='green'>
               Thanks for submitting this form
              </p>";
           }
              ?> 
               
           </p>
           <p>
               Enter your deatils :
           </p>
     
           <!-- use get for search results and post for sendig data securely -->
           <form action="index.php" method="post">
           <input type="text" name="name" id ="name" placeholder="Enter name">
           <input type="email" name="email" id ="email" placeholder="Enter email">
           <input type="phone" name="phone" id ="phone" placeholder="Enter phone">
           <input type="number" name="amount" id ="amount" placeholder="Enter amount paid">
           <textarea name="excited" id="excited" cols="30" rows="10" placeholder="Tell us how excited you feeel..."></textarea>
    
           <button  class=btn name="submit">Submit</button>
        </form>
   </div> 
   <script src="index.js"></script>


</body>
</html>



