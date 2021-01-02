<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
<div class="container"><div class="row">

<div class="col col-12 col-sm-4  "></div>
<div class="col col-12 col-sm-4  "></div>
    <table class="table table-borderless"><tr>
        <td>Product Code</td>
        <td><input class="form-control"  name="pcode" type="number"></td>
    </tr><tr>
        <td>Product Name</td>
        <td><input class="form-control"  name="pname" type="text"></td>
    </tr><tr>
        <td>Description</td>
        <td><input class="form-control"  name="des" type="text"></td>
    </tr>
    <tr>
        <td>Manufacturing Date</td>
        <td><input class="form-control"  name="mfg" type="date"></td>
    </tr>
    <tr>
        <td>Expiry date</td>
        <td><input class="form-control"  name="exp" type="date"></td>
    </tr>
    <tr>
        <td>Manufacture Name</td>
        <td><input class="form-control"  name="mfgname" type="text"></td>
    </tr>
    <tr>
        <td>Manufacture Adddress</td>
        <td><input class="form-control"  name="mfgaddress" type="text"></td>
    </tr>
    <tr>
        <td>Contact Email</td>
        <td><input class="form-control"  name="email" type="text"></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td><input class="form-control"  name="phone" type="number"></td>
    </tr>
    <tr>
        <td></td>
       <td><button class="btn btn-success" name="btn">Submit</button></td>
    </tr></table>
    <div class="col col-12 col-sm-4  "></div>
</form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $pc=$_POST["pcode"];
    $pn=$_POST["pname"];
    $d=$_POST["des"];
    $md=$_POST["mfg"];
    $ed=$_POST["exp"];
    $mn=$_POST["mfgname"];
    $ma=$_POST["mfgaddress"];
    $e=$_POST["email"];
    $phn=$_POST["phone"];
    

   
   $connection=new mysqli("localhost","root","","bookdemo");
   $sql="INSERT INTO `product`(`productcode`, `productname`, `description`, `mfgdate`, `expdate`, `mfgname`, `mfgaddress`, `email`, `phonenumber`)
   VALUES('$pc','$pn','$d','$md','$ed','$mn','$ma','$e','$phn')"; 

   $result=$connection->query($sql);
   if($result===true)
   {
       echo"<script>alert('Successfully inserted')</script>";
   }
   else
   {
    echo"<script>alert('Something went wrong')</script>";
   }
   
   echo"<table class='table'><tr>
   <td>pcode</td>
   <td>$pc</td>
</tr><tr>
   <td>pname</td>
   <td>$pn</td>
</tr><tr>
   <td>des</td>
   <td>$d</td>
</tr><tr>
   <td>mfgdate</td>
   <td>$md</td>
</tr><tr>
   <td>expdate</td>  
   <td>$ed</td>
</tr><tr>
   <td>mfgname</td>
   <td>$mn</td>
</tr><tr>
   <td>mfgadd</td>
   <td>$ma</td>
</tr><tr>
   <td>email</td>
   <td>$e</td>
</tr><tr>
<td>phone</td>
<td>$phn</td>
</tr></table>";
   
}
?>